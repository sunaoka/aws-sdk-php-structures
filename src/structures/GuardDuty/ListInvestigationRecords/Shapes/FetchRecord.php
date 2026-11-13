<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FINDINGS'|'DETECTOR'|'REPUTATION'|'FINDING_TYPE_DOCUMENTATION'|'CLOUD_TRAIL_RAW_EVENTS'|'RUNTIME_SIGNALS'|'MEMBER_ACCOUNTS' $FetchType
 * @property FetchQuery|null $Query
 * @property FetchResult|null $Result
 */
class FetchRecord extends Shape
{
    /**
     * @param array{
     *     FetchType: 'FINDINGS'|'DETECTOR'|'REPUTATION'|'FINDING_TYPE_DOCUMENTATION'|'CLOUD_TRAIL_RAW_EVENTS'|'RUNTIME_SIGNALS'|'MEMBER_ACCOUNTS',
     *     Query?: FetchQuery|null,
     *     Result?: FetchResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
