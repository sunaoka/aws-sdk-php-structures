<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasetDataSegmentRelationships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $workspaceName
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListDatasetDataSegmentRelationshipsRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     workspaceName: string,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
