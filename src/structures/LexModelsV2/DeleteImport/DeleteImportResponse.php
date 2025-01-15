<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $importId
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting'|null $importStatus
 */
class DeleteImportResponse extends Response
{
}
