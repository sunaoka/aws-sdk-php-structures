<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED' $status
 * @property string $statusMessage
 */
class ExportReadSetDetail extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     status: 'NOT_STARTED'|'IN_PROGRESS'|'FINISHED'|'FAILED',
     *     statusMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
