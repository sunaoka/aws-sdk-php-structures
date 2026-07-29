<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchDisassociateDataSegmentsFromDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $workspaceName
 * @property list<Shapes\DisassociateDataSegmentEntry> $disassociateDataSegmentEntries
 * @property string|null $clientToken
 */
class BatchDisassociateDataSegmentsFromDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     workspaceName: string,
     *     disassociateDataSegmentEntries: list<Shapes\DisassociateDataSegmentEntry>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
