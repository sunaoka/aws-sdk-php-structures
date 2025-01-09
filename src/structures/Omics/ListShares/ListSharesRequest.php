<?php

namespace Sunaoka\Aws\Structures\Omics\ListShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SELF'|'OTHER' $resourceOwner
 * @property Shapes\Filter $filter
 * @property string $nextToken
 * @property int $maxResults
 */
class ListSharesRequest extends Request
{
    /**
     * @param array{
     *     resourceOwner: 'SELF'|'OTHER',
     *     filter?: Shapes\Filter,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
