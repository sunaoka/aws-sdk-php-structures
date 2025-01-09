<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAttributeGroupsForApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListAttributeGroupsForApplicationRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
