<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SchemaArn
 * @property string|null $SchemaName
 * @property 'AVAILABLE'|'PENDING'|'DELETING'|null $Status
 */
class DeleteSchemaResponse extends Response
{
}
