<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPoolClients;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int<1, 60> $MaxResults
 * @property string $NextToken
 */
class ListUserPoolClientsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     MaxResults?: int<1, 60>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
