<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $customerEncryptionKeyArn
 * @property Shapes\FlowDefinition $definition
 * @property string $description
 * @property string $executionRoleArn
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateFlowRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     customerEncryptionKeyArn?: string,
     *     definition?: Shapes\FlowDefinition,
     *     description?: string,
     *     executionRoleArn: string,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
