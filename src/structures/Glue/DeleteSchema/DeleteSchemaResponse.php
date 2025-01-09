<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SchemaArn
 * @property string $SchemaName
 * @property 'AVAILABLE'|'PENDING'|'DELETING' $Status
 */
class DeleteSchemaResponse extends Response
{
}
