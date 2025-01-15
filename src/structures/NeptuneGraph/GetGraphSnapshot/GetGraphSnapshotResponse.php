<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraphSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property string|null $sourceGraphId
 * @property \Aws\Api\DateTimeResult|null $snapshotCreateTime
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'FAILED'|null $status
 * @property string|null $kmsKeyIdentifier
 */
class GetGraphSnapshotResponse extends Response
{
}
