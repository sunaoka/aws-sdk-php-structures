<?php

namespace Sunaoka\Aws\Structures\Ssm\PutComplianceItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string $ResourceType
 * @property string $ComplianceType
 * @property Shapes\ComplianceExecutionSummary $ExecutionSummary
 * @property list<Shapes\ComplianceItemEntry> $Items
 * @property string $ItemContentHash
 * @property 'COMPLETE'|'PARTIAL' $UploadType
 */
class PutComplianceItemsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     ResourceType: string,
     *     ComplianceType: string,
     *     ExecutionSummary: Shapes\ComplianceExecutionSummary,
     *     Items: list<Shapes\ComplianceItemEntry>,
     *     ItemContentHash?: string,
     *     UploadType?: 'COMPLETE'|'PARTIAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
