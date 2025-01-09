<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgeDeploymentStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROLLBACK_ON_FAILURE'|'DO_NOTHING' $FailureHandlingPolicy
 */
class EdgeDeploymentConfig extends Shape
{
    /**
     * @param array{FailureHandlingPolicy: 'ROLLBACK_ON_FAILURE'|'DO_NOTHING'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
