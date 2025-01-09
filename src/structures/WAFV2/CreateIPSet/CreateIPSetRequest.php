<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateIPSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Description
 * @property 'IPV4'|'IPV6' $IPAddressVersion
 * @property list<string> $Addresses
 * @property list<Shapes\Tag> $Tags
 */
class CreateIPSetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Description?: string,
     *     IPAddressVersion: 'IPV4'|'IPV6',
     *     Addresses: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
