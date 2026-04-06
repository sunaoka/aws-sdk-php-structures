<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MATCH'|'NO_MATCH'|null $customOutputStatus
 * @property string|null $customOutput
 * @property string|null $standardOutput
 */
class OutputSegment extends Shape
{
    /**
     * @param array{
     *     customOutputStatus?: 'MATCH'|'NO_MATCH'|null,
     *     customOutput?: string|null,
     *     standardOutput?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
