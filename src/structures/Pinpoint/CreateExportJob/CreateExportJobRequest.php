<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\ExportJobRequest $ExportJobRequest
 */
class CreateExportJobRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ExportJobRequest: Shapes\ExportJobRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
