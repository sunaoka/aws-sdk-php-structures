<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateActiveModelVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ModelName
 * @property string|null $ModelArn
 * @property int<1, max>|null $CurrentActiveVersion
 * @property int<1, max>|null $PreviousActiveVersion
 * @property string|null $CurrentActiveVersionArn
 * @property string|null $PreviousActiveVersionArn
 */
class UpdateActiveModelVersionResponse extends Response
{
}
