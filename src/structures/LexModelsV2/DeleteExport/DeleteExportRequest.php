<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exportId
 */
class DeleteExportRequest extends Request
{
    /**
     * @param array{exportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
