<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchDeleteDatasetDataSegments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $workspaceName
 * @property list<Shapes\DeleteDataSegmentEntry> $deleteDataSegmentEntries
 * @property string|null $clientToken
 */
class BatchDeleteDatasetDataSegmentsRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     workspaceName: string,
     *     deleteDataSegmentEntries: list<Shapes\DeleteDataSegmentEntry>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
