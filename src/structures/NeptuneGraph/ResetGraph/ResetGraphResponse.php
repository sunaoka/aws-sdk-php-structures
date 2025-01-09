<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ResetGraph;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'RESETTING'|'UPDATING'|'SNAPSHOTTING'|'FAILED'|'IMPORTING' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $createTime
 * @property int $provisionedMemory
 * @property string $endpoint
 * @property bool $publicConnectivity
 * @property Shapes\VectorSearchConfiguration $vectorSearchConfiguration
 * @property int $replicaCount
 * @property string $kmsKeyIdentifier
 * @property string $sourceSnapshotId
 * @property bool $deletionProtection
 * @property string $buildNumber
 */
class ResetGraphResponse extends Response
{
}
