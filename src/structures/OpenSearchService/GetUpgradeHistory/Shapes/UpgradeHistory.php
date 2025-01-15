<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetUpgradeHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UpgradeName
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'SUCCEEDED_WITH_ISSUES'|'FAILED'|null $UpgradeStatus
 * @property list<UpgradeStepItem>|null $StepsList
 */
class UpgradeHistory extends Shape
{
    /**
     * @param array{
     *     UpgradeName?: string|null,
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpgradeStatus?: 'IN_PROGRESS'|'SUCCEEDED'|'SUCCEEDED_WITH_ISSUES'|'FAILED'|null,
     *     StepsList?: list<UpgradeStepItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
