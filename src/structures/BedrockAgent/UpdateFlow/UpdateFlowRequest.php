<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customerEncryptionKeyArn
 * @property Shapes\FlowDefinition $definition
 * @property string $description
 * @property string $executionRoleArn
 * @property string $flowIdentifier
 * @property string $name
 */
class UpdateFlowRequest extends Request
{
    /**
     * @param array{
     *     customerEncryptionKeyArn?: string,
     *     definition?: Shapes\FlowDefinition,
     *     description?: string,
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
