<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'KENDRA' $sourceType
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListDatasetsRequest extends Request
{
    /**
     * @param array{
     *     sourceType: 'KENDRA',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
