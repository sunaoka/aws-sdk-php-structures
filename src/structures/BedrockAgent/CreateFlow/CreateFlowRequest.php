<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $executionRoleArn
 * @property string|null $customerEncryptionKeyArn
 * @property Shapes\FlowDefinition|null $definition
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateFlowRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     executionRoleArn: string,
     *     customerEncryptionKeyArn?: string|null,
     *     definition?: Shapes\FlowDefinition|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
