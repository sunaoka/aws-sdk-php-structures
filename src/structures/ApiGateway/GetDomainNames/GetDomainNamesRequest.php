<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDomainNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $position
 * @property int $limit
 * @property 'SELF'|'OTHER_ACCOUNTS' $resourceOwner
 */
class GetDomainNamesRequest extends Request
{
    /**
     * @param array{
     *     position?: string,
     *     limit?: int,
     *     resourceOwner?: 'SELF'|'OTHER_ACCOUNTS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
