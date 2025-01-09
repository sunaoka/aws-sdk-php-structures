<?php

namespace Sunaoka\Aws\Structures\Glue\ListMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'FIND_MATCHES' $TransformType
 * @property 'NOT_READY'|'READY'|'DELETING' $Status
 * @property string $GlueVersion
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedAfter
 * @property list<SchemaColumn> $Schema
 */
class TransformFilterCriteria extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     TransformType?: 'FIND_MATCHES',
     *     Status?: 'NOT_READY'|'READY'|'DELETING',
     *     GlueVersion?: string,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedAfter?: \Aws\Api\DateTimeResult,
     *     Schema?: list<SchemaColumn>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
