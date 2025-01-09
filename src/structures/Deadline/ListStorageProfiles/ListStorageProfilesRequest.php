<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStorageProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListStorageProfilesRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
