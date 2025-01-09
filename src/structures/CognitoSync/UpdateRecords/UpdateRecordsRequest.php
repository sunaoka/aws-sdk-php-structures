<?php

namespace Sunaoka\Aws\Structures\CognitoSync\UpdateRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityId
 * @property string $DatasetName
 * @property string $DeviceId
 * @property list<Shapes\RecordPatch> $RecordPatches
 * @property string $SyncSessionToken
 * @property string $ClientContext
 */
class UpdateRecordsRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityId: string,
     *     DatasetName: string,
     *     DeviceId?: string,
     *     RecordPatches?: list<Shapes\RecordPatch>,
     *     SyncSessionToken: string,
     *     ClientContext?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
