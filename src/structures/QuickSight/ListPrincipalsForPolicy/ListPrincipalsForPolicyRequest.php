<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListPrincipalsForPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $PolicyArn
 * @property 'USER'|'GROUP'|'ACCOUNT'|null $PrincipalType
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPrincipalsForPolicyRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     PolicyArn: string,
     *     PrincipalType?: 'USER'|'GROUP'|'ACCOUNT'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
