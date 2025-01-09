<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property string $releaseLabel
 * @property string $type
 * @property 'CREATING'|'CREATED'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'TERMINATED' $state
 * @property string $stateDetails
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ARM64'|'X86_64' $architecture
 */
class ApplicationSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     arn: string,
     *     releaseLabel: string,
     *     type: string,
     *     state: 'CREATING'|'CREATED'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'TERMINATED',
     *     stateDetails?: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     architecture?: 'ARM64'|'X86_64'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
