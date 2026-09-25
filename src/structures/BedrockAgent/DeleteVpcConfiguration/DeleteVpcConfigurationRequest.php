<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteVpcConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $vpcConfigurationId
 */
class DeleteVpcConfigurationRequest extends Request
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
