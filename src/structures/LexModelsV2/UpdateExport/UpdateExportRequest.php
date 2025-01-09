<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exportId
 * @property string $filePassword
 */
class UpdateExportRequest extends Request
{
    /**
     * @param array{
     *     exportId: string,
     *     filePassword?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
