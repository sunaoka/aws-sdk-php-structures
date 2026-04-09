<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListRegistries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $registryId
 * @property string $registryArn
 * @property 'CUSTOM_JWT'|'AWS_IAM'|null $authorizerType
 * @property 'CREATING'|'READY'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class RegistrySummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     registryId: string,
     *     registryArn: string,
     *     authorizerType?: 'CUSTOM_JWT'|'AWS_IAM'|null,
     *     status: 'CREATING'|'READY'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED',
     *     statusReason?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
