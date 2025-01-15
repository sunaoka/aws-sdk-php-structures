<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ExportResourceSpecification $resourceSpecification
 * @property 'LexJson'|'TSV'|'CSV' $fileFormat
 * @property string|null $filePassword
 */
class CreateExportRequest extends Request
{
    /**
     * @param array{
     *     resourceSpecification: Shapes\ExportResourceSpecification,
     *     fileFormat: 'LexJson'|'TSV'|'CSV',
     *     filePassword?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
