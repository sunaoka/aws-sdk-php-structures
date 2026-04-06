<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListCertificateAuthorities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property 'SELF'|'OTHER_ACCOUNTS'|null $ResourceOwner
 */
class ListCertificateAuthoritiesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ResourceOwner?: 'SELF'|'OTHER_ACCOUNTS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
