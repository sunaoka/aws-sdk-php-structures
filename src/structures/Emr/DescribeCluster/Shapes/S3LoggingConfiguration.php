<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'system-logs'|'application-logs'|'persistent-ui-logs', 'emr-managed'|'on-customer-s3only'|'disabled'>|null $LogTypeUploadPolicy
 */
class S3LoggingConfiguration extends Shape
{
    /**
     * @param array{LogTypeUploadPolicy?: array<'system-logs'|'application-logs'|'persistent-ui-logs', 'emr-managed'|'on-customer-s3only'|'disabled'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
