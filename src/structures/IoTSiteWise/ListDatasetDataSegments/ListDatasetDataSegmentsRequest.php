<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasetDataSegments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $workspaceName
 * @property string|null $datasetVersion
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListDatasetDataSegmentsRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     workspaceName: string,
     *     datasetVersion?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
