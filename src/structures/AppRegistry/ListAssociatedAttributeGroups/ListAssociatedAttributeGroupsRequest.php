<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAssociatedAttributeGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssociatedAttributeGroupsRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
