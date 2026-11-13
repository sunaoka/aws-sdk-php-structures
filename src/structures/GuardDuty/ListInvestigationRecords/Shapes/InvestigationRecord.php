<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecordId
 * @property 'OBSERVATION'|'ANALYSIS'|'UPDATE'|'FETCH'|'METADATA' $Type
 * @property string $Title
 * @property string|null $Narrative
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property SupportingData|null $SupportingData
 */
class InvestigationRecord extends Shape
{
    /**
     * @param array{
     *     RecordId: string,
     *     Type: 'OBSERVATION'|'ANALYSIS'|'UPDATE'|'FETCH'|'METADATA',
     *     Title: string,
     *     Narrative?: string|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     SupportingData?: SupportingData|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
