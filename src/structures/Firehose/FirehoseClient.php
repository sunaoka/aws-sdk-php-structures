<?php

namespace Sunaoka\Aws\Structures\Firehose;

class FirehoseClient extends \Aws\Firehose\FirehoseClient
{
    use CreateDeliveryStream\CreateDeliveryStreamTrait;
    use DeleteDeliveryStream\DeleteDeliveryStreamTrait;
    use DescribeDeliveryStream\DescribeDeliveryStreamTrait;
    use ListDeliveryStreams\ListDeliveryStreamsTrait;
    use ListTagsForDeliveryStream\ListTagsForDeliveryStreamTrait;
    use PutRecord\PutRecordTrait;
    use PutRecordBatch\PutRecordBatchTrait;
    use StartDeliveryStreamEncryption\StartDeliveryStreamEncryptionTrait;
    use StopDeliveryStreamEncryption\StopDeliveryStreamEncryptionTrait;
    use TagDeliveryStream\TagDeliveryStreamTrait;
    use UntagDeliveryStream\UntagDeliveryStreamTrait;
    use UpdateDestination\UpdateDestinationTrait;
}
