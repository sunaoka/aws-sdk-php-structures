<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeResourceServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Identifier
 */
class DescribeResourceServerRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
