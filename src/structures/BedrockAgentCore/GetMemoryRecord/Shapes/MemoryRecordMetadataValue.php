<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetMemoryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stringValue
 * @property list<string>|null $stringListValue
 * @property double|null $numberValue
 * @property \Aws\Api\DateTimeResult|null $dateTimeValue
 */
class MemoryRecordMetadataValue extends Shape
{
    /**
     * @param array{
     *     stringValue?: string|null,
     *     stringListValue?: list<string>|null,
     *     numberValue?: double|null,
     *     dateTimeValue?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
