<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $keyspaceName
 * @property string $typeName
 * @property list<Shapes\FieldDefinition>|null $fieldDefinitions
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'RESTORING'|null $status
 * @property list<string>|null $directReferringTables
 * @property list<string>|null $directParentTypes
 * @property int|null $maxNestingDepth
 * @property string $keyspaceArn
 */
class GetTypeResponse extends Response
{
}
