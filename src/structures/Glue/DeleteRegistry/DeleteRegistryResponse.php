<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteRegistry;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RegistryName
 * @property string|null $RegistryArn
 * @property 'AVAILABLE'|'DELETING'|null $Status
 */
class DeleteRegistryResponse extends Response
{
}
