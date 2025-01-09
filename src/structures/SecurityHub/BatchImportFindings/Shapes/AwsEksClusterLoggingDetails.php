<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsEksClusterLoggingClusterLoggingDetails> $ClusterLogging
 */
class AwsEksClusterLoggingDetails extends Shape
{
    /**
     * @param array{ClusterLogging?: list<AwsEksClusterLoggingClusterLoggingDetails>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
