<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property int<1, 60> $MaxResults
 * @property string $NextToken
 * @property bool $HideDisabled
 */
class ListIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     MaxResults: int<1, 60>,
     *     NextToken?: string,
     *     HideDisabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
