<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testId
 * @property string $testTemplateArn
 * @property string $serviceArn
 * @property int $totalTestRuns
 * @property int $successfulTestRuns
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class TestSummary extends Shape
{
    /**
     * @param array{
     *     testId: string,
     *     testTemplateArn: string,
     *     serviceArn: string,
     *     totalTestRuns: int,
     *     successfulTestRuns: int,
     *     creationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
