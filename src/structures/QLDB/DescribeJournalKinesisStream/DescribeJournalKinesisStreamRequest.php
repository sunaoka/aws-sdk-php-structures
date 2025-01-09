<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeJournalKinesisStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LedgerName
 * @property string $StreamId
 */
class DescribeJournalKinesisStreamRequest extends Request
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
