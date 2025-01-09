<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $importId
 * @property Shapes\ImportResourceSpecification $resourceSpecification
 * @property string $importedResourceId
 * @property string $importedResourceName
 * @property 'Overwrite'|'FailOnConflict'|'Append' $mergeStrategy
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting' $importStatus
 * @property list<string> $failureReasons
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class DescribeImportResponse extends Response
{
}
