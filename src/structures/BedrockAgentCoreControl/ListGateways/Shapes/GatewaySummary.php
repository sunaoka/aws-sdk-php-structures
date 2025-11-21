<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $gatewayId
 * @property string $name
 * @property 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED' $status
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'CUSTOM_JWT'|'AWS_IAM'|'NONE' $authorizerType
 * @property 'MCP' $protocolType
 */
class GatewaySummary extends Shape
{
    /**
     * @param array{
     *     gatewayId: string,
     *     name: string,
     *     status: 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED',
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     authorizerType: 'CUSTOM_JWT'|'AWS_IAM'|'NONE',
     *     protocolType: 'MCP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
