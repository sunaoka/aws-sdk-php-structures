<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ImportModelVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property string|null $ModelVersionArn
 * @property int<1, max>|null $ModelVersion
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|'CANCELED'|null $Status
 */
class ImportModelVersionResponse extends Response
{
}
