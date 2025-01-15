<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterCriteria|null $FilterCriteria
 * @property PipeSourceKinesisStreamParameters|null $KinesisStreamParameters
 * @property PipeSourceDynamoDBStreamParameters|null $DynamoDBStreamParameters
 * @property PipeSourceSqsQueueParameters|null $SqsQueueParameters
 * @property PipeSourceActiveMQBrokerParameters|null $ActiveMQBrokerParameters
 * @property PipeSourceRabbitMQBrokerParameters|null $RabbitMQBrokerParameters
 * @property PipeSourceManagedStreamingKafkaParameters|null $ManagedStreamingKafkaParameters
 * @property PipeSourceSelfManagedKafkaParameters|null $SelfManagedKafkaParameters
 */
class PipeSourceParameters extends Shape
{
    /**
     * @param array{
     *     FilterCriteria?: FilterCriteria|null,
     *     KinesisStreamParameters?: PipeSourceKinesisStreamParameters|null,
     *     DynamoDBStreamParameters?: PipeSourceDynamoDBStreamParameters|null,
     *     SqsQueueParameters?: PipeSourceSqsQueueParameters|null,
     *     ActiveMQBrokerParameters?: PipeSourceActiveMQBrokerParameters|null,
     *     RabbitMQBrokerParameters?: PipeSourceRabbitMQBrokerParameters|null,
     *     ManagedStreamingKafkaParameters?: PipeSourceManagedStreamingKafkaParameters|null,
     *     SelfManagedKafkaParameters?: PipeSourceSelfManagedKafkaParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
