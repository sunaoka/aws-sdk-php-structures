<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupName
 * @property string $logType
 */
class LogGroupSummary extends Shape
{
    /**
     * @param array{
     *     logGroupName: string,
     *     logType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
