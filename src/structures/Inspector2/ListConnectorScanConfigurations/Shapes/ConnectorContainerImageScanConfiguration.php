<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectorScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LIFETIME'|'DAYS_3'|'DAYS_7'|'DAYS_30'|'DAYS_180'|'DAYS_14'|'DAYS_60'|'DAYS_90'|null $pushDuration
 * @property 'DAYS_3'|'DAYS_7'|'DAYS_14'|'DAYS_30'|'DAYS_60'|'DAYS_90'|'DAYS_180'|null $pullDuration
 */
class ConnectorContainerImageScanConfiguration extends Shape
{
    /**
     * @param array{
     *     pushDuration?: 'LIFETIME'|'DAYS_3'|'DAYS_7'|'DAYS_30'|'DAYS_180'|'DAYS_14'|'DAYS_60'|'DAYS_90'|null,
     *     pullDuration?: 'DAYS_3'|'DAYS_7'|'DAYS_14'|'DAYS_30'|'DAYS_60'|'DAYS_90'|'DAYS_180'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
