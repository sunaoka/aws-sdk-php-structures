<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetUpgradeHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UpgradeName
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'SUCCEEDED_WITH_ISSUES'|'FAILED' $UpgradeStatus
 * @property list<UpgradeStepItem> $StepsList
 */
class UpgradeHistory extends Shape
{
    /**
     * @param array{
     *     UpgradeName?: string,
     *     StartTimestamp?: \Aws\Api\DateTimeResult,
     *     UpgradeStatus?: 'IN_PROGRESS'|'SUCCEEDED'|'SUCCEEDED_WITH_ISSUES'|'FAILED',
     *     StepsList?: list<UpgradeStepItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
