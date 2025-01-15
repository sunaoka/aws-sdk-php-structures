<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PRIVATE'|'PUBLIC'|null $scope
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     scope?: 'PRIVATE'|'PUBLIC'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
