<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property int<0, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'NAS_1'|null $volumeType
 */
class ListKxVolumesRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     maxResults?: int<0, 100>|null,
     *     nextToken?: string|null,
     *     volumeType?: 'NAS_1'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
