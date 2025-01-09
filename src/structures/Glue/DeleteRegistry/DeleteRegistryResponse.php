<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteRegistry;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistryName
 * @property string $RegistryArn
 * @property 'AVAILABLE'|'DELETING' $Status
 */
class DeleteRegistryResponse extends Response
{
}
