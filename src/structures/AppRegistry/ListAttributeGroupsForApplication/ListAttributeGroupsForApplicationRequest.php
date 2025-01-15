<?php

namespace Sunaoka\Aws\Structures\AppRegistry\ListAttributeGroupsForApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListAttributeGroupsForApplicationRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
