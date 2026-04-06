<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $state
 * @property ErrorDetails|null $error
 */
class DatasetStatus extends Shape
{
    /**
     * @param array{
     *     state: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED',
     *     error?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
