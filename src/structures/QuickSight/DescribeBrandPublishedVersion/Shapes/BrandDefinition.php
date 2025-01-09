<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BrandName
 * @property string $Description
 * @property ApplicationTheme $ApplicationTheme
 * @property LogoConfiguration $LogoConfiguration
 */
class BrandDefinition extends Shape
{
    /**
     * @param array{
     *     BrandName: string,
     *     Description?: string,
     *     ApplicationTheme?: ApplicationTheme,
     *     LogoConfiguration?: LogoConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
