<?php

namespace Sunaoka\Aws\Structures\QLDB\ListJournalKinesisStreamsForLedger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LedgerName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListJournalKinesisStreamsForLedgerRequest extends Request
{
    /**
     * @param array{
     *     LedgerName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
