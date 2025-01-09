<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListResourceServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListResourceServersRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
