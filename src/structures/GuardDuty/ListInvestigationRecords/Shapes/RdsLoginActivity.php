<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Outcome
 * @property string|null $Rate
 * @property string|null $AnomalyContext
 * @property int<0, max>|null $LoginCount
 * @property ActivityWindow|null $ActivityWindow
 * @property Enrichment|null $Enrichment
 */
class RdsLoginActivity extends Shape
{
    /**
     * @param array{
     *     Outcome?: string|null,
     *     Rate?: string|null,
     *     AnomalyContext?: string|null,
     *     LoginCount?: int<0, max>|null,
     *     ActivityWindow?: ActivityWindow|null,
     *     Enrichment?: Enrichment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
