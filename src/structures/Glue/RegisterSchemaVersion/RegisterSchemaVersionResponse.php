<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterSchemaVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SchemaVersionId
 * @property int<1, 100000>|null $VersionNumber
 * @property 'AVAILABLE'|'PENDING'|'FAILURE'|'DELETING'|null $Status
 */
class RegisterSchemaVersionResponse extends Response
{
}
