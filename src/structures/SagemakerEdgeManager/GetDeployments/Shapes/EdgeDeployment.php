<?php

namespace Sunaoka\Aws\Structures\SagemakerEdgeManager\GetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeploymentName
 * @property 'Model'|null $Type
 * @property 'ROLLBACK_ON_FAILURE'|'DO_NOTHING'|null $FailureHandlingPolicy
 * @property list<Definition>|null $Definitions
 */
class EdgeDeployment extends Shape
{
    /**
     * @param array{
     *     DeploymentName?: string|null,
     *     Type?: 'Model'|null,
     *     FailureHandlingPolicy?: 'ROLLBACK_ON_FAILURE'|'DO_NOTHING'|null,
     *     Definitions?: list<Definition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
