<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\DeleteGraph;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'RESETTING'|'UPDATING'|'SNAPSHOTTING'|'FAILED'|'IMPORTING'|null $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property int<16, 24576>|null $provisionedMemory
 * @property string|null $endpoint
 * @property bool|null $publicConnectivity
 * @property Shapes\VectorSearchConfiguration|null $vectorSearchConfiguration
 * @property int<0, 2>|null $replicaCount
 * @property string|null $kmsKeyIdentifier
 * @property string|null $sourceSnapshotId
 * @property bool|null $deletionProtection
 * @property string|null $buildNumber
 */
class DeleteGraphResponse extends Response
{
}
