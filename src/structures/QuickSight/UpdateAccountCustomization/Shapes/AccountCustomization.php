<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccountCustomization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultTheme
 * @property string $DefaultEmailCustomizationTemplate
 */
class AccountCustomization extends Shape
{
    /**
     * @param array{
     *     DefaultTheme?: string,
     *     DefaultEmailCustomizationTemplate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
