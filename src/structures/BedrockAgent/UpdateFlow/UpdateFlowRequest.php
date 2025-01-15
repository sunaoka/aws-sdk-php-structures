<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $customerEncryptionKeyArn
 * @property Shapes\FlowDefinition|null $definition
 * @property string|null $description
 * @property string $executionRoleArn
 * @property string $flowIdentifier
 * @property string $name
 */
class UpdateFlowRequest extends Request
{
    /**
     * @param array{
     *     customerEncryptionKeyArn?: string|null,
     *     definition?: Shapes\FlowDefinition|null,
     *     description?: string|null,
     *     executionRoleArn: string,
     *     flowIdentifier: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
