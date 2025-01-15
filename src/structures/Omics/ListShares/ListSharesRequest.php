<?php

namespace Sunaoka\Aws\Structures\Omics\ListShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SELF'|'OTHER' $resourceOwner
 * @property Shapes\Filter|null $filter
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListSharesRequest extends Request
{
    /**
     * @param array{
     *     resourceOwner: 'SELF'|'OTHER',
     *     filter?: Shapes\Filter|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
