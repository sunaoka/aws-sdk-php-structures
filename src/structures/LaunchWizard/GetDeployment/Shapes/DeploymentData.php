<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $deletedAt
 * @property string $deploymentArn
 * @property string $id
 * @property string $name
 * @property string $patternName
 * @property string $resourceGroup
 * @property array<string, string> $specifications
 * @property 'COMPLETED'|'CREATING'|'DELETE_IN_PROGRESS'|'DELETE_INITIATING'|'DELETE_FAILED'|'DELETED'|'FAILED'|'IN_PROGRESS'|'VALIDATING' $status
 * @property array<string, string> $tags
 * @property string $workloadName
 */
class DeploymentData extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     deletedAt?: \Aws\Api\DateTimeResult,
     *     deploymentArn?: string,
     *     id?: string,
     *     name?: string,
     *     patternName?: string,
     *     resourceGroup?: string,
     *     specifications?: array<string, string>,
     *     status?: 'COMPLETED'|'CREATING'|'DELETE_IN_PROGRESS'|'DELETE_INITIATING'|'DELETE_FAILED'|'DELETED'|'FAILED'|'IN_PROGRESS'|'VALIDATING',
     *     tags?: array<string, string>,
     *     workloadName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
