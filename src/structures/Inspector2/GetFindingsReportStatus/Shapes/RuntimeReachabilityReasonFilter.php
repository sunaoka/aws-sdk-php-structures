<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetFindingsReportStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'NOT_EQUALS' $comparison
 * @property 'PACKAGE_IN_DOCKERFILE_WORKLOAD_PATH'|'PACKAGE_NOT_IN_DOCKERFILE_WORKLOAD_PATH'|'PROCESS_OBSERVED_IN_EC2_RUNTIME'|'PROCESS_NOT_OBSERVED_IN_EC2_RUNTIME' $value
 */
class RuntimeReachabilityReasonFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS'|'NOT_EQUALS',
     *     value: 'PACKAGE_IN_DOCKERFILE_WORKLOAD_PATH'|'PACKAGE_NOT_IN_DOCKERFILE_WORKLOAD_PATH'|'PROCESS_OBSERVED_IN_EC2_RUNTIME'|'PROCESS_NOT_OBSERVED_IN_EC2_RUNTIME'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
