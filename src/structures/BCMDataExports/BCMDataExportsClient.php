<?php

namespace Sunaoka\Aws\Structures\BCMDataExports;

class BCMDataExportsClient extends \Aws\BCMDataExports\BCMDataExportsClient
{
    use CreateExport\CreateExportTrait;
    use DeleteExport\DeleteExportTrait;
    use GetExecution\GetExecutionTrait;
    use GetExport\GetExportTrait;
    use GetTable\GetTableTrait;
    use ListExecutions\ListExecutionsTrait;
    use ListExports\ListExportsTrait;
    use ListTables\ListTablesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateExport\UpdateExportTrait;
}
