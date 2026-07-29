<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchAssociateDataSegmentsToDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $workspaceName
 * @property list<Shapes\AssociateDataSegmentEntry> $associateDataSegmentEntries
 * @property string|null $clientToken
 */
class BatchAssociateDataSegmentsToDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     workspaceName: string,
     *     associateDataSegmentEntries: list<Shapes\AssociateDataSegmentEntry>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
