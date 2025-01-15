<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\BatchGetIncidentFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationStackUpdate|null $cloudFormationStackUpdate
 * @property CodeDeployDeployment|null $codeDeployDeployment
 */
class FindingDetails extends Shape
{
    /**
     * @param array{
     *     cloudFormationStackUpdate?: CloudFormationStackUpdate|null,
     *     codeDeployDeployment?: CodeDeployDeployment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
