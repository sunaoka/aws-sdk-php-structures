<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetAvailableModuleVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $moduleId
 * @property string $version
 * @property string $moduleVersionArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DEPRECATED' $status
 * @property list<'READ_REQUEST_BODY'|'READ_REQUEST_HEADERS'|'MUTATE_REQUEST_BODY'|'ENRICH_REQUEST_HEADERS'|'ENRICH_REQUEST_EXT'|'FILTER'> $permissions
 * @property list<'FILTER'|'ENRICH_REQUEST_EXT'|'ENRICH_REQUEST_HEADERS'|'OBSERVE'> $configurableActions
 * @property string|null $configurationSchema
 * @property string|null $releaseNotes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetAvailableModuleVersionResponse extends Response
{
}
