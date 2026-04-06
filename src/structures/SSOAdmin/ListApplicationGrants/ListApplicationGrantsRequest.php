<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property string|null $NextToken
 */
class ListApplicationGrantsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
