<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 60> $MaxResults
 */
class ListUserPoolsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults: int<1, 60>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
