<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateActiveModelVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property int<1, max> $CurrentActiveVersion
 * @property int<1, max> $PreviousActiveVersion
 * @property string $CurrentActiveVersionArn
 * @property string $PreviousActiveVersionArn
 */
class UpdateActiveModelVersionResponse extends Response
{
}
