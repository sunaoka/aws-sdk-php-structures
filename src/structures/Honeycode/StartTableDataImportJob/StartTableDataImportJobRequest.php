<?php

namespace Sunaoka\Aws\Structures\Honeycode\StartTableDataImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workbookId
 * @property Shapes\ImportDataSource $dataSource
 * @property 'DELIMITED_TEXT' $dataFormat
 * @property string $destinationTableId
 * @property Shapes\ImportOptions $importOptions
 * @property string $clientRequestToken
 */
class StartTableDataImportJobRequest extends Request
{
    /**
     * @param array{
     *     workbookId: string,
     *     dataSource: Shapes\ImportDataSource,
     *     dataFormat: 'DELIMITED_TEXT',
     *     destinationTableId: string,
     *     importOptions: Shapes\ImportOptions,
     *     clientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
