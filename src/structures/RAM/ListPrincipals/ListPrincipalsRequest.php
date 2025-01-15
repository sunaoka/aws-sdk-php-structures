<?php

namespace Sunaoka\Aws\Structures\RAM\ListPrincipals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SELF'|'OTHER-ACCOUNTS' $resourceOwner
 * @property string|null $resourceArn
 * @property list<string>|null $principals
 * @property string|null $resourceType
 * @property list<string>|null $resourceShareArns
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 */
class ListPrincipalsRequest extends Request
{
    /**
     * @param array{
     *     resourceOwner: 'SELF'|'OTHER-ACCOUNTS',
     *     resourceArn?: string|null,
     *     principals?: list<string>|null,
     *     resourceType?: string|null,
     *     resourceShareArns?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
