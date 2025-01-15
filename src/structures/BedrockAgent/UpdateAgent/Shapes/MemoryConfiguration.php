<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SESSION_SUMMARY'> $enabledMemoryTypes
 * @property SessionSummaryConfiguration|null $sessionSummaryConfiguration
 * @property int<0, 365>|null $storageDays
 */
class MemoryConfiguration extends Shape
{
    /**
     * @param array{
     *     enabledMemoryTypes: list<'SESSION_SUMMARY'>,
     *     sessionSummaryConfiguration?: SessionSummaryConfiguration|null,
     *     storageDays?: int<0, 365>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
