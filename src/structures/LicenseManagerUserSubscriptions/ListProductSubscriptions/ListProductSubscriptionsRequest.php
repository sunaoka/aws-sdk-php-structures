<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListProductSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Product
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property int|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 */
class ListProductSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     Product?: string|null,
     *     IdentityProvider: Shapes\IdentityProvider,
     *     MaxResults?: int|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
