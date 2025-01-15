<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $importId
 * @property Shapes\ImportResourceSpecification|null $resourceSpecification
 * @property 'Overwrite'|'FailOnConflict'|'Append'|null $mergeStrategy
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting'|null $importStatus
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 */
class StartImportResponse extends Response
{
}
