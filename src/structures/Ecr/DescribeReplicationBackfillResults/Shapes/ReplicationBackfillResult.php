<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeReplicationBackfillResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property ImageIdentifier $imageId
 * @property 'COMPLETE'|'FAILED' $status
 * @property string|null $failureCode
 * @property list<string>|null $subImageFailureCodes
 */
class ReplicationBackfillResult extends Shape
{
    /**
     * @param array{
     *     repositoryName: string,
     *     imageId: ImageIdentifier,
     *     status: 'COMPLETE'|'FAILED',
     *     failureCode?: string|null,
     *     subImageFailureCodes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
