<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraphSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property string $sourceGraphId
 * @property \Aws\Api\DateTimeResult $snapshotCreateTime
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'FAILED' $status
 * @property string $kmsKeyIdentifier
 */
class GetGraphSnapshotResponse extends Response
{
}
