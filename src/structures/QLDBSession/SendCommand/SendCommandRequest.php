<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SessionToken
 * @property Shapes\StartSessionRequest|null $StartSession
 * @property Shapes\StartTransactionRequest|null $StartTransaction
 * @property Shapes\EndSessionRequest|null $EndSession
 * @property Shapes\CommitTransactionRequest|null $CommitTransaction
 * @property Shapes\AbortTransactionRequest|null $AbortTransaction
 * @property Shapes\ExecuteStatementRequest|null $ExecuteStatement
 * @property Shapes\FetchPageRequest|null $FetchPage
 */
class SendCommandRequest extends Request
{
    /**
     * @param array{
     *     SessionToken?: string|null,
     *     StartSession?: Shapes\StartSessionRequest|null,
     *     StartTransaction?: Shapes\StartTransactionRequest|null,
     *     EndSession?: Shapes\EndSessionRequest|null,
     *     CommitTransaction?: Shapes\CommitTransactionRequest|null,
     *     AbortTransaction?: Shapes\AbortTransactionRequest|null,
     *     ExecuteStatement?: Shapes\ExecuteStatementRequest|null,
     *     FetchPage?: Shapes\FetchPageRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
