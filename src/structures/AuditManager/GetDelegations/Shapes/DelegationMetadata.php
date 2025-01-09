<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetDelegations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $assessmentName
 * @property string $assessmentId
 * @property 'IN_PROGRESS'|'UNDER_REVIEW'|'COMPLETE' $status
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $controlSetName
 */
class DelegationMetadata extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     assessmentName?: string,
     *     assessmentId?: string,
     *     status?: 'IN_PROGRESS'|'UNDER_REVIEW'|'COMPLETE',
     *     roleArn?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     controlSetName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
