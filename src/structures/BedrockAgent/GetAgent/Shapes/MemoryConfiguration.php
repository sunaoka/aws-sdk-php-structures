<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SESSION_SUMMARY'> $enabledMemoryTypes
 * @property int<0, 30>|null $storageDays
 */
class MemoryConfiguration extends Shape
{
    /**
     * @param array{
     *     enabledMemoryTypes: list<'SESSION_SUMMARY'>,
     *     storageDays?: int<0, 30>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
