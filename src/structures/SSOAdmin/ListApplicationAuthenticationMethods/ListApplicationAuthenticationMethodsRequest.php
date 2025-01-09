<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAuthenticationMethods;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property string $NextToken
 */
class ListApplicationAuthenticationMethodsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
