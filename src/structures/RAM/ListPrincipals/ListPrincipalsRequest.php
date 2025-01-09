<?php

namespace Sunaoka\Aws\Structures\RAM\ListPrincipals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SELF'|'OTHER-ACCOUNTS' $resourceOwner
 * @property string $resourceArn
 * @property list<string> $principals
 * @property string $resourceType
 * @property list<string> $resourceShareArns
 * @property string $nextToken
 * @property int<1, 500> $maxResults
 */
class ListPrincipalsRequest extends Request
{
    /**
     * @param array{
     *     resourceOwner: 'SELF'|'OTHER-ACCOUNTS',
     *     resourceArn?: string,
     *     principals?: list<string>,
     *     resourceType?: string,
     *     resourceShareArns?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
