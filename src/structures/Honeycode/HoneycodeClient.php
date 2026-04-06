<?php

namespace Sunaoka\Aws\Structures\Honeycode;

class HoneycodeClient extends \Aws\Honeycode\HoneycodeClient
{
    use BatchCreateTableRows\BatchCreateTableRowsTrait;
    use BatchDeleteTableRows\BatchDeleteTableRowsTrait;
    use BatchUpdateTableRows\BatchUpdateTableRowsTrait;
    use BatchUpsertTableRows\BatchUpsertTableRowsTrait;
    use DescribeTableDataImportJob\DescribeTableDataImportJobTrait;
    use GetScreenData\GetScreenDataTrait;
    use InvokeScreenAutomation\InvokeScreenAutomationTrait;
    use ListTableColumns\ListTableColumnsTrait;
    use ListTableRows\ListTableRowsTrait;
    use ListTables\ListTablesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use QueryTableRows\QueryTableRowsTrait;
    use StartTableDataImportJob\StartTableDataImportJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
