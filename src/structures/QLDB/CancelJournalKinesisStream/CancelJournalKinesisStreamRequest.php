<?php

namespace Sunaoka\Aws\Structures\QLDB\CancelJournalKinesisStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LedgerName
 * @property string $StreamId
 */
class CancelJournalKinesisStreamRequest extends Request
{
    /**
     * @param array{
     *     LedgerName: string,
     *     StreamId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
