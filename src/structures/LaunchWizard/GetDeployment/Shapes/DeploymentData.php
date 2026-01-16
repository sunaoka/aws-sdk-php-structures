<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $id
 * @property string|null $workloadName
 * @property string|null $patternName
 * @property 'COMPLETED'|'CREATING'|'DELETE_IN_PROGRESS'|'DELETE_INITIATING'|'DELETE_FAILED'|'DELETED'|'FAILED'|'IN_PROGRESS'|'VALIDATING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETED'|'UPDATE_FAILED'|'UPDATE_ROLLBACK_COMPLETED'|'UPDATE_ROLLBACK_FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property array<string, string>|null $specifications
 * @property string|null $resourceGroup
 * @property \Aws\Api\DateTimeResult|null $deletedAt
 * @property array<string, string>|null $tags
 * @property string|null $deploymentArn
 */
class DeploymentData extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     id?: string|null,
     *     workloadName?: string|null,
     *     patternName?: string|null,
     *     status?: 'COMPLETED'|'CREATING'|'DELETE_IN_PROGRESS'|'DELETE_INITIATING'|'DELETE_FAILED'|'DELETED'|'FAILED'|'IN_PROGRESS'|'VALIDATING'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETED'|'UPDATE_FAILED'|'UPDATE_ROLLBACK_COMPLETED'|'UPDATE_ROLLBACK_FAILED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     specifications?: array<string, string>|null,
     *     resourceGroup?: string|null,
     *     deletedAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null,
     *     deploymentArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
