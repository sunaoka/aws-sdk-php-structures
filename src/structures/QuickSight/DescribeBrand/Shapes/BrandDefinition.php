<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BrandName
 * @property string|null $Description
 * @property ApplicationTheme|null $ApplicationTheme
 * @property LogoConfiguration|null $LogoConfiguration
 */
class BrandDefinition extends Shape
{
    /**
     * @param array{
     *     BrandName: string,
     *     Description?: string|null,
     *     ApplicationTheme?: ApplicationTheme|null,
     *     LogoConfiguration?: LogoConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
