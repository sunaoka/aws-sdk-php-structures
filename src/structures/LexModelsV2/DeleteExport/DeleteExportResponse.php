<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $exportId
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting' $exportStatus
 */
class DeleteExportResponse extends Response
{
}
