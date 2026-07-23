<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookSync;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $notebookId
 * @property 'ACTIVE'|'ARCHIVED'|'SYNC_IN_PROGRESS'|'SYNC_FAILED'|null $status
 * @property string|null $domainId
 * @property string|null $owningProjectId
 * @property Shapes\SourceLocation|null $sourceLocation
 * @property Shapes\GitMetadata|null $gitMetadata
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 */
class StartNotebookSyncResponse extends Response
{
}
