<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'KENDRA'|'SITEWISE' $sourceType
 * @property string|null $workspaceName
 * @property 'SESSION'|'CURATED'|'EXTERNAL'|null $datasetType
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListDatasetsRequest extends Request
{
    /**
     * @param array{
     *     sourceType: 'KENDRA'|'SITEWISE',
     *     workspaceName?: string|null,
     *     datasetType?: 'SESSION'|'CURATED'|'EXTERNAL'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
