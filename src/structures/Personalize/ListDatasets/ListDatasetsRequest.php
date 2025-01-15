<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $datasetGroupArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListDatasetsRequest extends Request
{
    /**
     * @param array{
     *     datasetGroupArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
