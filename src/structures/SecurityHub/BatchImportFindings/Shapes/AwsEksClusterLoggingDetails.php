<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsEksClusterLoggingClusterLoggingDetails>|null $ClusterLogging
 */
class AwsEksClusterLoggingDetails extends Shape
{
    /**
     * @param array{ClusterLogging?: list<AwsEksClusterLoggingClusterLoggingDetails>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
