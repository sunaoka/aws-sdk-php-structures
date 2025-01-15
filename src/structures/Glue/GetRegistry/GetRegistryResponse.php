<?php

namespace Sunaoka\Aws\Structures\Glue\GetRegistry;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RegistryName
 * @property string|null $RegistryArn
 * @property string|null $Description
 * @property 'AVAILABLE'|'DELETING'|null $Status
 * @property string|null $CreatedTime
 * @property string|null $UpdatedTime
 */
class GetRegistryResponse extends Response
{
}
