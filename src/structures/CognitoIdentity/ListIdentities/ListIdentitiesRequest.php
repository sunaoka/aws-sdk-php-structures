<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property int<1, 60> $MaxResults
 * @property string|null $NextToken
 * @property bool|null $HideDisabled
 */
class ListIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     MaxResults: int<1, 60>,
     *     NextToken?: string|null,
     *     HideDisabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
