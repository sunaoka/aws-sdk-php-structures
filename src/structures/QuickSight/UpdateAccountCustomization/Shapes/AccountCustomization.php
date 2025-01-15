<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccountCustomization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultTheme
 * @property string|null $DefaultEmailCustomizationTemplate
 */
class AccountCustomization extends Shape
{
    /**
     * @param array{
     *     DefaultTheme?: string|null,
     *     DefaultEmailCustomizationTemplate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
