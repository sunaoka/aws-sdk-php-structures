<?php

namespace Sunaoka\Aws\Structures\Ses\ListIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'EmailAddress'|'Domain'|null $IdentityType
 * @property string|null $NextToken
 * @property int|null $MaxItems
 */
class ListIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     IdentityType?: 'EmailAddress'|'Domain'|null,
     *     NextToken?: string|null,
     *     MaxItems?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
