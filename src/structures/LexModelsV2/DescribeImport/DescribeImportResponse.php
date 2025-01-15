<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $importId
 * @property Shapes\ImportResourceSpecification|null $resourceSpecification
 * @property string|null $importedResourceId
 * @property string|null $importedResourceName
 * @property 'Overwrite'|'FailOnConflict'|'Append'|null $mergeStrategy
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting'|null $importStatus
 * @property list<string>|null $failureReasons
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class DescribeImportResponse extends Response
{
}
