<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateIPSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string|null $Description
 * @property 'IPV4'|'IPV6' $IPAddressVersion
 * @property list<string> $Addresses
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateIPSetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Description?: string|null,
     *     IPAddressVersion: 'IPV4'|'IPV6',
     *     Addresses: list<string>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
