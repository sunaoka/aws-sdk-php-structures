<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListEntityCoverages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $entityArn
 * @property string|null $resourceOwnerAccountId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListEntityCoveragesRequest extends Request
{
    /**
     * @param array{
     *     entityArn: string,
     *     resourceOwnerAccountId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
