<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\UpdateExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportArn
 * @property Shapes\Export $Export
 */
class UpdateExportRequest extends Request
{
    /**
     * @param array{
     *     ExportArn: string,
     *     Export: Shapes\Export
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
