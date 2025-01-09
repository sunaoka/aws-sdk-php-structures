<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SESSION_SUMMARY'> $enabledMemoryTypes
 * @property SessionSummaryConfiguration $sessionSummaryConfiguration
 * @property int<0, 365> $storageDays
 */
class MemoryConfiguration extends Shape
{
    /**
     * @param array{
     *     enabledMemoryTypes: list<'SESSION_SUMMARY'>,
     *     sessionSummaryConfiguration?: SessionSummaryConfiguration,
     *     storageDays?: int<0, 365>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
