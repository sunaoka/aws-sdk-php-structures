<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListCertificateAuthorities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property 'SELF'|'OTHER_ACCOUNTS' $ResourceOwner
 */
class ListCertificateAuthoritiesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     ResourceOwner?: 'SELF'|'OTHER_ACCOUNTS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
