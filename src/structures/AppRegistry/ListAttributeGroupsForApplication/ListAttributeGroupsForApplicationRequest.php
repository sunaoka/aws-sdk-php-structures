<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAttributeGroupsForApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAttributeGroupsForApplicationRequest extends Request
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
