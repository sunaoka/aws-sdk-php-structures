<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListGroupVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property string|null $MaxResults
 * @property string|null $NextToken
 */
class ListGroupVersionsRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     MaxResults?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
