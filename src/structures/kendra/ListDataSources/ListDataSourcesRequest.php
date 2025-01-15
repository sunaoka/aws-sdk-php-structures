<?php

namespace Sunaoka\Aws\Structures\kendra\ListDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
