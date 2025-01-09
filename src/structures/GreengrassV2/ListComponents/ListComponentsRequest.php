<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PRIVATE'|'PUBLIC' $scope
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListComponentsRequest extends Request
{
    /**
     * @param array{
     *     scope?: 'PRIVATE'|'PUBLIC',
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
