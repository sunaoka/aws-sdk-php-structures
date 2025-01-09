<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestSuites\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testSuiteId
 * @property string $name
 * @property string $statusReason
 * @property int $latestVersion
 * @property string $testSuiteArn
 * @property 'Creating'|'Updating'|'Active'|'Failed'|'Deleting' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 */
class TestSuiteSummary extends Shape
{
    /**
     * @param array{
     *     testSuiteId: string,
     *     name: string,
     *     statusReason?: string,
     *     latestVersion: int,
     *     testSuiteArn: string,
     *     status: 'Creating'|'Updating'|'Active'|'Failed'|'Deleting',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastUpdateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
