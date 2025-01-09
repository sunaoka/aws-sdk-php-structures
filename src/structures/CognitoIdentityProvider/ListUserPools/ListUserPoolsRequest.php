<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 60> $MaxResults
 */
class ListUserPoolsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults: int<1, 60>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
