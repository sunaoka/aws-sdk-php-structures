<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStorageProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListStorageProfilesRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
