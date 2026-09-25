<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateVpcConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string|null $clientToken
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
 */
class CreateVpcConfigurationRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     clientToken?: string|null,
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     resourceTarget: string,
     *     port: int<1, 65535>,
     *     protocol: 'HTTP'|'HTTPS',
     *     resolutionMode: 'PUBLIC'|'IN_VPC',
     *     hostHeader?: string|null,
     *     tlsServerName?: string|null,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
