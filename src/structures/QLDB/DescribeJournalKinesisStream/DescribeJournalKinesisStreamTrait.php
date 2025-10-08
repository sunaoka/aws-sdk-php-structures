<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeJournalKinesisStream;

trait DescribeJournalKinesisStreamTrait
{
    /**
     * @param DescribeJournalKinesisStreamRequest $args
     * @return DescribeJournalKinesisStreamResponse
     */
    public function describeJournalKinesisStream(DescribeJournalKinesisStreamRequest $args)
    {
        $result = parent::describeJournalKinesisStream($args->toArray());
        return new DescribeJournalKinesisStreamResponse($result->toArray());
    }
}
