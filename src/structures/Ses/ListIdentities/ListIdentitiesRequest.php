<?php

namespace Sunaoka\Aws\Structures\Ses\ListIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'EmailAddress'|'Domain' $IdentityType
 * @property string $NextToken
 * @property int $MaxItems
 */
class ListIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     IdentityType?: 'EmailAddress'|'Domain',
     *     NextToken?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
