<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingTimeDisposition
 * @property string|null $CurrentDisposition
 * @property string|null $ReputationComparison
 */
class Reputation extends Shape
{
    /**
     * @param array{
     *     FindingTimeDisposition?: string|null,
     *     CurrentDisposition?: string|null,
     *     ReputationComparison?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
