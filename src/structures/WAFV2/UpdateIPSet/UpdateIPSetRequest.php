<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateIPSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Id
 * @property string $Description
 * @property list<string> $Addresses
 * @property string $LockToken
 */
class UpdateIPSetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Id: string,
     *     Description?: string,
     *     Addresses: list<string>,
     *     LockToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
