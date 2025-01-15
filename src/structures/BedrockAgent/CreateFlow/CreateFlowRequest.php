<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $customerEncryptionKeyArn
 * @property Shapes\FlowDefinition|null $definition
 * @property string|null $description
 * @property string $executionRoleArn
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateFlowRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     customerEncryptionKeyArn?: string|null,
     *     definition?: Shapes\FlowDefinition|null,
     *     description?: string|null,
     *     executionRoleArn: string,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
