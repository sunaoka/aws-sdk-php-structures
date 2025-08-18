<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SESSION_SUMMARY'> $enabledMemoryTypes
 * @property int<0, 365>|null $storageDays
 * @property SessionSummaryConfiguration|null $sessionSummaryConfiguration
 */
class MemoryConfiguration extends Shape
{
    /**
     * @param array{
     *     enabledMemoryTypes: list<'SESSION_SUMMARY'>,
     *     storageDays?: int<0, 365>|null,
     *     sessionSummaryConfiguration?: SessionSummaryConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
