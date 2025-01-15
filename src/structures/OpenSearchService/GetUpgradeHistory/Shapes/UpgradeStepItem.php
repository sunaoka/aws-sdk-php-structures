<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetUpgradeHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRE_UPGRADE_CHECK'|'SNAPSHOT'|'UPGRADE'|null $UpgradeStep
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'SUCCEEDED_WITH_ISSUES'|'FAILED'|null $UpgradeStepStatus
 * @property list<string>|null $Issues
 * @property double|null $ProgressPercent
 */
class UpgradeStepItem extends Shape
{
    /**
     * @param array{
     *     UpgradeStep?: 'PRE_UPGRADE_CHECK'|'SNAPSHOT'|'UPGRADE'|null,
     *     UpgradeStepStatus?: 'IN_PROGRESS'|'SUCCEEDED'|'SUCCEEDED_WITH_ISSUES'|'FAILED'|null,
     *     Issues?: list<string>|null,
     *     ProgressPercent?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
