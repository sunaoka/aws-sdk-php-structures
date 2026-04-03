<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationLibraries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $libraryArn
 * @property string|null $libraryName
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class DataAutomationLibrarySummary extends Shape
{
    /**
     * @param array{
     *     libraryArn: string,
     *     libraryName?: string|null,
     *     creationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
