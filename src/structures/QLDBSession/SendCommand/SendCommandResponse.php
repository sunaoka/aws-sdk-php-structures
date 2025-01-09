<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\StartSessionResult $StartSession
 * @property Shapes\StartTransactionResult $StartTransaction
 * @property Shapes\EndSessionResult $EndSession
 * @property Shapes\CommitTransactionResult $CommitTransaction
 * @property Shapes\AbortTransactionResult $AbortTransaction
 * @property Shapes\ExecuteStatementResult $ExecuteStatement
 * @property Shapes\FetchPageResult $FetchPage
 */
class SendCommandResponse extends Response
{
}
