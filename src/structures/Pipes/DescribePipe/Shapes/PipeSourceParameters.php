<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PipeSourceActiveMQBrokerParameters|null $ActiveMQBrokerParameters
 * @property PipeSourceDynamoDBStreamParameters|null $DynamoDBStreamParameters
 * @property FilterCriteria|null $FilterCriteria
 * @property PipeSourceKinesisStreamParameters|null $KinesisStreamParameters
 * @property PipeSourceManagedStreamingKafkaParameters|null $ManagedStreamingKafkaParameters
 * @property PipeSourceRabbitMQBrokerParameters|null $RabbitMQBrokerParameters
 * @property PipeSourceSelfManagedKafkaParameters|null $SelfManagedKafkaParameters
 * @property PipeSourceSqsQueueParameters|null $SqsQueueParameters
 */
class PipeSourceParameters extends Shape
{
    /**
     * @param array{
     *     ActiveMQBrokerParameters?: PipeSourceActiveMQBrokerParameters|null,
     *     DynamoDBStreamParameters?: PipeSourceDynamoDBStreamParameters|null,
     *     FilterCriteria?: FilterCriteria|null,
     *     KinesisStreamParameters?: PipeSourceKinesisStreamParameters|null,
     *     ManagedStreamingKafkaParameters?: PipeSourceManagedStreamingKafkaParameters|null,
     *     RabbitMQBrokerParameters?: PipeSourceRabbitMQBrokerParameters|null,
     *     SelfManagedKafkaParameters?: PipeSourceSelfManagedKafkaParameters|null,
     *     SqsQueueParameters?: PipeSourceSqsQueueParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
