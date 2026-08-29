<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeTermsByClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string $UserPoolId
 * @property string $TermsName
 */
class DescribeTermsByClientRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     UserPoolId: string,
     *     TermsName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
