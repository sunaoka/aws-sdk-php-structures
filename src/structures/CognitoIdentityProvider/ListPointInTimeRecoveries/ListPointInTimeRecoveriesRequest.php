<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListPointInTimeRecoveries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string|null $NextToken
 * @property int<1, 60>|null $MaxResults
 */
class ListPointInTimeRecoveriesRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 60>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
