<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $domainId
 * @property string $owningProjectId
 * @property string $notebookId
 * @property 'PDF'|'IPYNB' $fileFormat
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 */
class StartNotebookExportResponse extends Response
{
}
