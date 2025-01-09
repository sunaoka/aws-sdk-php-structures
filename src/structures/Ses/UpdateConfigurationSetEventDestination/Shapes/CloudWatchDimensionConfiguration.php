<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DimensionName
 * @property 'messageTag'|'emailHeader'|'linkTag' $DimensionValueSource
 * @property string $DefaultDimensionValue
 */
class CloudWatchDimensionConfiguration extends Shape
{
    /**
     * @param array{
     *     DimensionName: string,
     *     DimensionValueSource: 'messageTag'|'emailHeader'|'linkTag',
     *     DefaultDimensionValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
