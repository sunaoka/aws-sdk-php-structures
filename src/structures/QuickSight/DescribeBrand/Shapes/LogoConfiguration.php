<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AltText
 * @property LogoSetConfiguration $LogoSet
 */
class LogoConfiguration extends Shape
{
    /**
     * @param array{
     *     AltText: string,
     *     LogoSet: LogoSetConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
