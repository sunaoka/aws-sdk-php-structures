<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteComputationModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $state
 * @property ErrorDetails|null $error
 */
class ComputationModelStatus extends Shape
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
