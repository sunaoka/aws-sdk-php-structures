<?php

namespace Sunaoka\Aws\Structures\CognitoSync\UpdateRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityPoolId
 * @property string $IdentityId
 * @property string $DatasetName
 * @property string|null $DeviceId
 * @property list<Shapes\RecordPatch>|null $RecordPatches
 * @property string $SyncSessionToken
 * @property string|null $ClientContext
 */
class UpdateRecordsRequest extends Request
{
    /**
     * @param array{
     *     IdentityPoolId: string,
     *     IdentityId: string,
     *     DatasetName: string,
     *     DeviceId?: string|null,
     *     RecordPatches?: list<Shapes\RecordPatch>|null,
     *     SyncSessionToken: string,
     *     ClientContext?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
