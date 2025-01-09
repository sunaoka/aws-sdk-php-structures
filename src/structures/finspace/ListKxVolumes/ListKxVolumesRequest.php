<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property int<0, 100> $maxResults
 * @property string $nextToken
 * @property 'NAS_1' $volumeType
 */
class ListKxVolumesRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     maxResults?: int<0, 100>,
     *     nextToken?: string,
     *     volumeType?: 'NAS_1'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
