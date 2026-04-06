<?php

namespace Sunaoka\Aws\Structures\EKS\ListUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $nodegroupName
 * @property string|null $addonName
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListUpdatesRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     nodegroupName?: string|null,
     *     addonName?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
