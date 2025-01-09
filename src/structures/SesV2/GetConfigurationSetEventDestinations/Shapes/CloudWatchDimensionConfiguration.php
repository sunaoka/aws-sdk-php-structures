<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DimensionName
 * @property 'MESSAGE_TAG'|'EMAIL_HEADER'|'LINK_TAG' $DimensionValueSource
 * @property string $DefaultDimensionValue
 */
class CloudWatchDimensionConfiguration extends Shape
{
    /**
     * @param array{
     *     DimensionName: string,
     *     DimensionValueSource: 'MESSAGE_TAG'|'EMAIL_HEADER'|'LINK_TAG',
     *     DefaultDimensionValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
