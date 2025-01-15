<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAccessScopes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class ListApplicationAccessScopesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
