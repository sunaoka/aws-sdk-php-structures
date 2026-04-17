<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListContactVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contactId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListContactVersionsRequest extends Request
{
    /**
     * @param array{
     *     contactId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
