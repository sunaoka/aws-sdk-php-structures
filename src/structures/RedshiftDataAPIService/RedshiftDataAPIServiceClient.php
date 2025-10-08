<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService;

class RedshiftDataAPIServiceClient extends \Aws\RedshiftDataAPIService\RedshiftDataAPIServiceClient
{
    use BatchExecuteStatement\BatchExecuteStatementTrait;
    use CancelStatement\CancelStatementTrait;
    use DescribeStatement\DescribeStatementTrait;
    use DescribeTable\DescribeTableTrait;
    use ExecuteStatement\ExecuteStatementTrait;
    use GetStatementResult\GetStatementResultTrait;
    use GetStatementResultV2\GetStatementResultV2Trait;
    use ListDatabases\ListDatabasesTrait;
    use ListSchemas\ListSchemasTrait;
    use ListStatements\ListStatementsTrait;
    use ListTables\ListTablesTrait;
}
