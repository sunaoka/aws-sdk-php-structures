<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EligibleForReplication
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property list<'COMPLETED'|'FAILED'|'REPLICA'|'NONE'>|null $ObjectReplicationStatuses
 */
class JobManifestGeneratorFilter extends Shape
{
    /**
     * @param array{
     *     EligibleForReplication?: bool|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     ObjectReplicationStatuses?: list<'COMPLETED'|'FAILED'|'REPLICA'|'NONE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
