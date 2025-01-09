<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $state
 * @property ConfigurationErrorDetails $error
 */
class ConfigurationStatus extends Shape
{
    /**
     * @param array{
     *     state: 'ACTIVE'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED',
     *     error?: ConfigurationErrorDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
