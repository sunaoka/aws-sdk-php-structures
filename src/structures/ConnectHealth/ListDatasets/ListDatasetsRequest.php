<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\ListDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property 'MEDICAL_CODING'|null $type
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListDatasetsRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     type?: 'MEDICAL_CODING'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
