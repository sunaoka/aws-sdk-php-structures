<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionToken
 * @property Shapes\StartSessionRequest $StartSession
 * @property Shapes\StartTransactionRequest $StartTransaction
 * @property Shapes\EndSessionRequest $EndSession
 * @property Shapes\CommitTransactionRequest $CommitTransaction
 * @property Shapes\AbortTransactionRequest $AbortTransaction
 * @property Shapes\ExecuteStatementRequest $ExecuteStatement
 * @property Shapes\FetchPageRequest $FetchPage
 */
class SendCommandRequest extends Request
{
    /**
     * @param array{
     *     SessionToken?: string,
     *     StartSession?: Shapes\StartSessionRequest,
     *     StartTransaction?: Shapes\StartTransactionRequest,
     *     EndSession?: Shapes\EndSessionRequest,
     *     CommitTransaction?: Shapes\CommitTransactionRequest,
     *     AbortTransaction?: Shapes\AbortTransactionRequest,
     *     ExecuteStatement?: Shapes\ExecuteStatementRequest,
     *     FetchPage?: Shapes\FetchPageRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
