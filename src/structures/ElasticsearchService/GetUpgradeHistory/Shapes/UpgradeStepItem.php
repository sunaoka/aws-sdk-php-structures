<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\GetUpgradeHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRE_UPGRADE_CHECK'|'SNAPSHOT'|'UPGRADE' $UpgradeStep
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'SUCCEEDED_WITH_ISSUES'|'FAILED' $UpgradeStepStatus
 * @property list<string> $Issues
 * @property double $ProgressPercent
 */
class UpgradeStepItem extends Shape
{
    /**
     * @param array{
     *     UpgradeStep?: 'PRE_UPGRADE_CHECK'|'SNAPSHOT'|'UPGRADE',
     *     UpgradeStepStatus?: 'IN_PROGRESS'|'SUCCEEDED'|'SUCCEEDED_WITH_ISSUES'|'FAILED',
     *     Issues?: list<string>,
     *     ProgressPercent?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
