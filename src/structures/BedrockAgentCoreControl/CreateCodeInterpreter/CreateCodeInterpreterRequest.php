<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCodeInterpreter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $executionRoleArn
 * @property Shapes\CodeInterpreterNetworkConfiguration $networkConfiguration
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateCodeInterpreterRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     executionRoleArn?: string|null,
     *     networkConfiguration: Shapes\CodeInterpreterNetworkConfiguration,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
