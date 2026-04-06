<?php

namespace Sunaoka\Aws\Structures\BackupStorage\ListObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageJobId
 * @property string|null $StartingObjectName
 * @property string|null $StartingObjectPrefix
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 */
class ListObjectsRequest extends Request
{
    /**
     * @param array{
     *     StorageJobId: string,
     *     StartingObjectName?: string|null,
     *     StartingObjectPrefix?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
