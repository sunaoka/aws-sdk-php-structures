<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetSchemaVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SchemaId
 * @property 'capability'|'definition'|null $Type
 * @property string|null $Description
 * @property string|null $Namespace
 * @property string|null $SemanticVersion
 * @property 'PUBLIC'|'PRIVATE'|null $Visibility
 * @property Shapes\SchemaVersionSchema|null $Schema
 */
class GetSchemaVersionResponse extends Response
{
}
