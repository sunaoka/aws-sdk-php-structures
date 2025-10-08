<?php

namespace Sunaoka\Aws\Structures\RDSDataService;

class RDSDataServiceClient extends \Aws\RDSDataService\RDSDataServiceClient
{
    use BatchExecuteStatement\BatchExecuteStatementTrait;
    use BeginTransaction\BeginTransactionTrait;
    use CommitTransaction\CommitTransactionTrait;
    use ExecuteSql\ExecuteSqlTrait;
    use ExecuteStatement\ExecuteStatementTrait;
    use RollbackTransaction\RollbackTransactionTrait;
}
