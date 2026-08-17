<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $dateTimeValue
 * @property double|null $numberValue
 * @property list<string>|null $stringListValue
 * @property string|null $stringValue
 */
class AgenticRetrieveMemoryMetadataValue extends Shape
{
    /**
     * @param array{
     *     dateTimeValue?: \Aws\Api\DateTimeResult|null,
     *     numberValue?: double|null,
     *     stringListValue?: list<string>|null,
     *     stringValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
