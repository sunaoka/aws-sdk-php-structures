<?php

namespace Sunaoka\Aws\Structures\QLDB\ListJournalKinesisStreamsForLedger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LedgerName
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListJournalKinesisStreamsForLedgerRequest extends Request
{
    /**
     * @param array{
     *     LedgerName: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
