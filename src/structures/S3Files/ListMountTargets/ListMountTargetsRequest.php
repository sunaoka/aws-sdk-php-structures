<?php

namespace Sunaoka\Aws\Structures\S3Files\ListMountTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $fileSystemId
 * @property string|null $accessPointId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListMountTargetsRequest extends Request
{
    /**
     * @param array{
     *     fileSystemId?: string|null,
     *     accessPointId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
