<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\StartSessionResult|null $StartSession
 * @property Shapes\StartTransactionResult|null $StartTransaction
 * @property Shapes\EndSessionResult|null $EndSession
 * @property Shapes\CommitTransactionResult|null $CommitTransaction
 * @property Shapes\AbortTransactionResult|null $AbortTransaction
 * @property Shapes\ExecuteStatementResult|null $ExecuteStatement
 * @property Shapes\FetchPageResult|null $FetchPage
 */
class SendCommandResponse extends Response
{
}
