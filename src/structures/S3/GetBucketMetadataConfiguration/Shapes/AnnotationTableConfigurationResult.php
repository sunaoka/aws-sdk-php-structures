<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ConfigurationState
 * @property string|null $TableStatus
 * @property ErrorDetails|null $Error
 * @property string|null $TableName
 * @property string|null $TableArn
 * @property string|null $Role
 */
class AnnotationTableConfigurationResult extends Shape
{
    /**
     * @param array{
     *     ConfigurationState: 'ENABLED'|'DISABLED',
     *     TableStatus?: string|null,
     *     Error?: ErrorDetails|null,
     *     TableName?: string|null,
     *     TableArn?: string|null,
     *     Role?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
