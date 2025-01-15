<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'FIND_MATCHES'|null $TransformType
 * @property 'NOT_READY'|'READY'|'DELETING'|null $Status
 * @property string|null $GlueVersion
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedAfter
 * @property list<SchemaColumn>|null $Schema
 */
class TransformFilterCriteria extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     TransformType?: 'FIND_MATCHES'|null,
     *     Status?: 'NOT_READY'|'READY'|'DELETING'|null,
     *     GlueVersion?: string|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedAfter?: \Aws\Api\DateTimeResult|null,
     *     Schema?: list<SchemaColumn>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
