<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testConfigurationId
 * @property string $name
 * @property string $statusReason
 * @property int $latestVersion
 * @property string $testConfigurationArn
 * @property 'Active'|'Deleting' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 */
class TestConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     testConfigurationId: string,
     *     name: string,
     *     statusReason?: string,
     *     latestVersion: int,
     *     testConfigurationArn: string,
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
