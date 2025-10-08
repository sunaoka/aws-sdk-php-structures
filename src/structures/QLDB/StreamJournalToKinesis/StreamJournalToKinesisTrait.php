<?php

namespace Sunaoka\Aws\Structures\QLDB\StreamJournalToKinesis;

trait StreamJournalToKinesisTrait
{
    /**
     * @param StreamJournalToKinesisRequest $args
     * @return StreamJournalToKinesisResponse
     */
    public function streamJournalToKinesis(StreamJournalToKinesisRequest $args)
    {
        $result = parent::streamJournalToKinesis($args->toArray());
        return new StreamJournalToKinesisResponse($result->toArray());
    }
}
