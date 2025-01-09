<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\GetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeploymentName
 * @property 'Model' $Type
 * @property 'ROLLBACK_ON_FAILURE'|'DO_NOTHING' $FailureHandlingPolicy
 * @property list<Definition> $Definitions
 */
class EdgeDeployment extends Shape
{
    /**
     * @param array{
     *     DeploymentName?: string,
     *     Type?: 'Model',
     *     FailureHandlingPolicy?: 'ROLLBACK_ON_FAILURE'|'DO_NOTHING',
     *     Definitions?: list<Definition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
