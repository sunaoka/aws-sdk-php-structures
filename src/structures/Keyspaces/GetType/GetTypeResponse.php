<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $keyspaceName
 * @property string $typeName
 * @property list<Shapes\FieldDefinition> $fieldDefinitions
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'RESTORING' $status
 * @property list<string> $directReferringTables
 * @property list<string> $directParentTypes
 * @property int $maxNestingDepth
 * @property string $keyspaceArn
 */
class GetTypeResponse extends Response
{
}
