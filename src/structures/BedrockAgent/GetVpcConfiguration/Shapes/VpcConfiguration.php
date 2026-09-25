<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetVpcConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcConfigurationId
 * @property 'CREATING'|'CREATED'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED' $status
 * @property string|null $statusMessage
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property string $resourceTarget
 * @property int<1, 65535> $port
 * @property 'HTTP'|'HTTPS' $protocol
 * @property 'PUBLIC'|'IN_VPC' $resolutionMode
 * @property string|null $hostHeader
 * @property string|null $tlsServerName
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{
     *     vpcConfigurationId: string,
     *     status: 'CREATING'|'CREATED'|'DELETING'|'CREATE_FAILED'|'DELETE_FAILED',
     *     statusMessage?: string|null,
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     resourceTarget: string,
     *     port: int<1, 65535>,
     *     protocol: 'HTTP'|'HTTPS',
     *     resolutionMode: 'PUBLIC'|'IN_VPC',
     *     hostHeader?: string|null,
     *     tlsServerName?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
