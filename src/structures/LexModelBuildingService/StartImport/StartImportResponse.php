<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\StartImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property 'BOT'|'INTENT'|'SLOT_TYPE'|null $resourceType
 * @property 'OVERWRITE_LATEST'|'FAIL_ON_CONFLICT'|null $mergeStrategy
 * @property string|null $importId
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED'|null $importStatus
 * @property list<Shapes\Tag>|null $tags
 * @property \Aws\Api\DateTimeResult|null $createdDate
 */
class StartImportResponse extends Response
{
}
