<?php

namespace Sunaoka\Aws\Structures\CognitoSync\ListIdentityPoolUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int|null $MaxResults
 */
class ListIdentityPoolUsageRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
