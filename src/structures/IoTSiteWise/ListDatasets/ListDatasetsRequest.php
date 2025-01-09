<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'KENDRA' $sourceType
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListDatasetsRequest extends Request
{
    /**
     * @param array{
     *     sourceType: 'KENDRA',
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
