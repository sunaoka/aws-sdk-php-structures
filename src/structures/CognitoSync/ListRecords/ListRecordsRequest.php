<?php

namespace Sunaoka\Aws\Structures\CognitoSync\ListRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityId
 * @property string $DatasetName
 * @property int $LastSyncCount
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $SyncSessionToken
 */
class ListRecordsRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityId: string,
     *     DatasetName: string,
     *     LastSyncCount?: int,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     SyncSessionToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
