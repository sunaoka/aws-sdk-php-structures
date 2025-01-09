<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAccessScopes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property int<1, 10> $MaxResults
 * @property string $NextToken
 */
class ListApplicationAccessScopesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     MaxResults?: int<1, 10>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
