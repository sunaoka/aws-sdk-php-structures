<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $importId
 * @property Shapes\ImportResourceSpecification $resourceSpecification
 * @property 'Overwrite'|'FailOnConflict'|'Append' $mergeStrategy
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting' $importStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 */
class StartImportResponse extends Response
{
}
