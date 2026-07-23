<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $notebookId
 * @property 'ACTIVE'|'ARCHIVED'|'SYNC_IN_PROGRESS'|'SYNC_FAILED'|null $status
 * @property string|null $domainId
 * @property string|null $owningProjectId
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\SourceLocation|null $sourceLocation
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 */
class StartNotebookImportResponse extends Response
{
}
