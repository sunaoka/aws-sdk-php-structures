<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\BatchGetIncidentFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationStackUpdate $cloudFormationStackUpdate
 * @property CodeDeployDeployment $codeDeployDeployment
 */
class FindingDetails extends Shape
{
    /**
     * @param array{
     *     cloudFormationStackUpdate?: CloudFormationStackUpdate,
     *     codeDeployDeployment?: CodeDeployDeployment
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
