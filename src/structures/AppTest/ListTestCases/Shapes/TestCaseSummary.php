<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testCaseId
 * @property string $testCaseArn
 * @property string $name
 * @property string $statusReason
 * @property int $latestVersion
 * @property 'Active'|'Deleting' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 */
class TestCaseSummary extends Shape
{
    /**
     * @param array{
     *     testCaseId: string,
     *     testCaseArn: string,
     *     name: string,
     *     statusReason?: string,
     *     latestVersion: int,
     *     status: 'Active'|'Deleting',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastUpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
