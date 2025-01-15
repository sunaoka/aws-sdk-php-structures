<?php

namespace Sunaoka\Aws\Structures\CognitoSync\ListRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityId
 * @property string $DatasetName
 * @property int|null $LastSyncCount
 * @property string|null $NextToken
 * @property int|null $MaxResults
 * @property string|null $SyncSessionToken
 */
class ListRecordsRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityId: string,
     *     DatasetName: string,
     *     LastSyncCount?: int|null,
     *     NextToken?: string|null,
     *     MaxResults?: int|null,
     *     SyncSessionToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
