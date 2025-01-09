<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ImportModelVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property string $ModelVersionArn
 * @property int<1, max> $ModelVersion
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED' $Status
 */
class ImportModelVersionResponse extends Response
{
}
