<?php
declare(strict_types=1);

namespace SpaethTech\Twig\Extensions;

use SpaethTech\Twig\TokenParsers\SwitchTokenParser;
use Twig\Extension\AbstractExtension;

/**
 * Class SwitchExtension
 *
 * @package SpaethTech\Twig
 * @final
 *
 * @author Ryan Spaeth
 * @copyright 2020 Spaeth Technologies, Inc.
 */
final class SwitchExtension extends AbstractExtension
{
    /**
     * @return string The extension's name.
     */
    public function getName(): string
    {
        return "switch";

    }

    /**
     * @inheritDoc
     */
    public function getTokenParsers(): array
    {
        return [ new SwitchTokenParser() ];

    }

}
