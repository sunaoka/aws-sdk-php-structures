<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $deletedAt
 * @property string|null $deploymentArn
 * @property string|null $id
 * @property string|null $name
 * @property string|null $patternName
 * @property string|null $resourceGroup
 * @property array<string, string>|null $specifications
 * @property 'COMPLETED'|'CREATING'|'DELETE_IN_PROGRESS'|'DELETE_INITIATING'|'DELETE_FAILED'|'DELETED'|'FAILED'|'IN_PROGRESS'|'VALIDATING'|null $status
 * @property array<string, string>|null $tags
 * @property string|null $workloadName
 */
class DeploymentData extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     deletedAt?: \Aws\Api\DateTimeResult|null,
     *     deploymentArn?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     patternName?: string|null,
     *     resourceGroup?: string|null,
     *     specifications?: array<string, string>|null,
     *     status?: 'COMPLETED'|'CREATING'|'DELETE_IN_PROGRESS'|'DELETE_INITIATING'|'DELETE_FAILED'|'DELETED'|'FAILED'|'IN_PROGRESS'|'VALIDATING'|null,
     *     tags?: array<string, string>|null,
     *     workloadName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
