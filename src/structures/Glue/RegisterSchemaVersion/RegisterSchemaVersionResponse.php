<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterSchemaVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SchemaVersionId
 * @property int $VersionNumber
 * @property 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING' $Status
 */
class RegisterSchemaVersionResponse extends Response
{
}
