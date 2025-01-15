<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $exportId
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting'|null $exportStatus
 */
class DeleteExportResponse extends Response
{
}
