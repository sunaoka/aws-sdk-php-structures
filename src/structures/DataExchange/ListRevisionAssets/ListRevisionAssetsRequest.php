<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListRevisionAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $RevisionId
 */
class ListRevisionAssetsRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
