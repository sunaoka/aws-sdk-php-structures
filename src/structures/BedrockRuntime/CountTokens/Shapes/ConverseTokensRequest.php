<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Message>|null $messages
 * @property list<SystemContentBlock>|null $system
 * @property ToolConfiguration|null $toolConfig
 * @property Document|null $additionalModelRequestFields
 */
class ConverseTokensRequest extends Shape
{
    /**
     * @param array{
     *     messages?: list<Message>|null,
     *     system?: list<SystemContentBlock>|null,
     *     toolConfig?: ToolConfiguration|null,
     *     additionalModelRequestFields?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
