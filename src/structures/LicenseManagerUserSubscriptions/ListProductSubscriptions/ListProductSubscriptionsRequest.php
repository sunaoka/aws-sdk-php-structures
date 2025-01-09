<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListProductSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $Product
 */
class ListProductSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Product?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
