<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPoolClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 */
class DescribeUserPoolClientRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
