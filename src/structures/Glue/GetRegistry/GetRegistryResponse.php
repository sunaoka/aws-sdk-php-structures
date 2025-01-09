<?php

namespace Sunaoka\Aws\Structures\Glue\GetRegistry;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistryName
 * @property string $RegistryArn
 * @property string $Description
 * @property 'AVAILABLE'|'DELETING' $Status
 * @property string $CreatedTime
 * @property string $UpdatedTime
 */
class GetRegistryResponse extends Response
{
}
