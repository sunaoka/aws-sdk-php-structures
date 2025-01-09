<?php

namespace Sunaoka\Aws\Structures\EKS\ListUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $nodegroupName
 * @property string $addonName
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListUpdatesRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     nodegroupName?: string,
     *     addonName?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
