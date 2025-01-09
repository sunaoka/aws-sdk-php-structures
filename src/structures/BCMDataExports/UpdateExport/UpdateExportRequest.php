<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\UpdateExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Export $Export
 * @property string $ExportArn
 */
class UpdateExportRequest extends Request
{
    /**
     * @param array{
     *     Export: Shapes\Export,
     *     ExportArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
