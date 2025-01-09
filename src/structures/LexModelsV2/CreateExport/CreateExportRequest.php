<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ExportResourceSpecification $resourceSpecification
 * @property 'LexJson'|'TSV'|'CSV' $fileFormat
 * @property string $filePassword
 */
class CreateExportRequest extends Request
{
    /**
     * @param array{
     *     resourceSpecification: Shapes\ExportResourceSpecification,
     *     fileFormat: 'LexJson'|'TSV'|'CSV',
     *     filePassword?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
