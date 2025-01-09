<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SESSION_SUMMARY'> $enabledMemoryTypes
 * @property SessionSummaryConfiguration $sessionSummaryConfiguration
 * @property int $storageDays
 */
class MemoryConfiguration extends Shape
{
    /**
     * @param array{
     *     enabledMemoryTypes: list<'SESSION_SUMMARY'>,
     *     sessionSummaryConfiguration?: SessionSummaryConfiguration,
     *     storageDays?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
