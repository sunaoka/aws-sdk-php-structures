<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $importId
 */
class DeleteImportRequest extends Request
{
    /**
     * @param array{importId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
