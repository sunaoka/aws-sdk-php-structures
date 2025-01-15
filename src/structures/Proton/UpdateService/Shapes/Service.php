<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $branchName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $name
 * @property ServicePipeline|null $pipeline
 * @property string|null $repositoryConnectionArn
 * @property string|null $repositoryId
 * @property string $spec
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED_CLEANUP_IN_PROGRESS'|'CREATE_FAILED_CLEANUP_COMPLETE'|'CREATE_FAILED_CLEANUP_FAILED'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED_CLEANUP_IN_PROGRESS'|'UPDATE_FAILED_CLEANUP_COMPLETE'|'UPDATE_FAILED_CLEANUP_FAILED'|'UPDATE_FAILED'|'UPDATE_COMPLETE_CLEANUP_FAILED' $status
 * @property string|null $statusMessage
 * @property string $templateName
 */
class Service extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     branchName?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     name: string,
     *     pipeline?: ServicePipeline|null,
     *     repositoryConnectionArn?: string|null,
     *     repositoryId?: string|null,
     *     spec: string,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED_CLEANUP_IN_PROGRESS'|'CREATE_FAILED_CLEANUP_COMPLETE'|'CREATE_FAILED_CLEANUP_FAILED'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED_CLEANUP_IN_PROGRESS'|'UPDATE_FAILED_CLEANUP_COMPLETE'|'UPDATE_FAILED_CLEANUP_FAILED'|'UPDATE_FAILED'|'UPDATE_COMPLETE_CLEANUP_FAILED',
     *     statusMessage?: string|null,
     *     templateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
