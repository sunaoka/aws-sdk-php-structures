<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetDelegations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $assessmentName
 * @property string|null $assessmentId
 * @property 'IN_PROGRESS'|'UNDER_REVIEW'|'COMPLETE'|null $status
 * @property string|null $roleArn
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $controlSetName
 */
class DelegationMetadata extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     assessmentName?: string|null,
     *     assessmentId?: string|null,
     *     status?: 'IN_PROGRESS'|'UNDER_REVIEW'|'COMPLETE'|null,
     *     roleArn?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     controlSetName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
