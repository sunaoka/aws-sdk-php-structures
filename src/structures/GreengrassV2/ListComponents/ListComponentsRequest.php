<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PRIVATE'|'PUBLIC' $scope
 * @property int $maxResults
 * @property string $nextToken
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     scope?: 'PRIVATE'|'PUBLIC',
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
