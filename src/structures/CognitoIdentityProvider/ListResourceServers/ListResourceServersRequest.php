<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListResourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourceServersRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
