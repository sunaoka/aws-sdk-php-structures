<?php

namespace Sunaoka\Aws\Structures\BackupStorage\ListChunks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageJobId
 * @property string $ObjectToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListChunksRequest extends Request
{
    /**
     * @param array{
     *     StorageJobId: string,
     *     ObjectToken: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
