<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebookExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $domainId
 * @property string $owningProjectId
 * @property string $notebookId
 * @property 'PDF'|'IPYNB' $fileFormat
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property Shapes\OutputLocation|null $outputLocation
 * @property Shapes\NotebookExportError|null $error
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 */
class GetNotebookExportResponse extends Response
{
}
