<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $importId
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting' $importStatus
 */
class DeleteImportResponse extends Response
{
}
