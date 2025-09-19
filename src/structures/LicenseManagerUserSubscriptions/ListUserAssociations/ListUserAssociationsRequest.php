<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListUserAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\IdentityProvider $IdentityProvider
 * @property int|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 */
class ListUserAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
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
