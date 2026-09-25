<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetVpcConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $vpcConfigurationId
 */
class GetVpcConfigurationRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     vpcConfigurationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
