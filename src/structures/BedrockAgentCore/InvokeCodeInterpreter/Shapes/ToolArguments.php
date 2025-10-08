<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property 'python'|'javascript'|'typescript'|null $language
 * @property bool|null $clearContext
 * @property string|null $command
 * @property string|null $path
 * @property list<string>|null $paths
 * @property list<InputContentBlock>|null $content
 * @property string|null $directoryPath
 * @property string|null $taskId
 */
class ToolArguments extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     language?: 'python'|'javascript'|'typescript'|null,
     *     clearContext?: bool|null,
     *     command?: string|null,
     *     path?: string|null,
     *     paths?: list<string>|null,
     *     content?: list<InputContentBlock>|null,
     *     directoryPath?: string|null,
     *     taskId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
