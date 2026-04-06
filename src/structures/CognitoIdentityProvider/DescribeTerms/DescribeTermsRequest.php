<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TermsId
 * @property string $UserPoolId
 */
class DescribeTermsRequest extends Request
{
    /**
     * @param array{
     *     TermsId: string,
     *     UserPoolId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
