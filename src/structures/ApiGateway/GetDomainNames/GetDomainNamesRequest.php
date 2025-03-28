<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDomainNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $position
 * @property int|null $limit
 * @property 'SELF'|'OTHER_ACCOUNTS'|null $resourceOwner
 */
class GetDomainNamesRequest extends Request
{
    /**
     * @param array{
     *     position?: string|null,
     *     limit?: int|null,
     *     resourceOwner?: 'SELF'|'OTHER_ACCOUNTS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
