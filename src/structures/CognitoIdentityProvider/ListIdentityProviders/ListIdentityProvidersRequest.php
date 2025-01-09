<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListIdentityProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int<0, 60> $MaxResults
 * @property string $NextToken
 */
class ListIdentityProvidersRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     MaxResults?: int<0, 60>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
