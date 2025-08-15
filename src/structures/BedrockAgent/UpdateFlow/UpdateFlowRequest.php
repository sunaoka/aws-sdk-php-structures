<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $executionRoleArn
 * @property string|null $customerEncryptionKeyArn
 * @property Shapes\FlowDefinition|null $definition
 * @property string $flowIdentifier
 */
class UpdateFlowRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     executionRoleArn: string,
     *     customerEncryptionKeyArn?: string|null,
     *     definition?: Shapes\FlowDefinition|null,
     *     flowIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
