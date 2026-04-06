<?php

namespace Sunaoka\Aws\Structures\QLDB\CancelJournalKinesisStream;

trait CancelJournalKinesisStreamTrait
{
    /**
     * @param CancelJournalKinesisStreamRequest $args
     * @return CancelJournalKinesisStreamResponse
     */
    public function cancelJournalKinesisStream(CancelJournalKinesisStreamRequest $args)
    {
        $result = parent::cancelJournalKinesisStream($args->toArray());
        return new CancelJournalKinesisStreamResponse($result->toArray());
    }
}
