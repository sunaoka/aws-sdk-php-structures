<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPoolDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Domain
 */
class DescribeUserPoolDomainRequest extends Request
{
    /**
     * @param array{Domain: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
