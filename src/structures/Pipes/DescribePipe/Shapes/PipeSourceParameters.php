<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterCriteria $FilterCriteria
 * @property PipeSourceKinesisStreamParameters $KinesisStreamParameters
 * @property PipeSourceDynamoDBStreamParameters $DynamoDBStreamParameters
 * @property PipeSourceSqsQueueParameters $SqsQueueParameters
 * @property PipeSourceActiveMQBrokerParameters $ActiveMQBrokerParameters
 * @property PipeSourceRabbitMQBrokerParameters $RabbitMQBrokerParameters
 * @property PipeSourceManagedStreamingKafkaParameters $ManagedStreamingKafkaParameters
 * @property PipeSourceSelfManagedKafkaParameters $SelfManagedKafkaParameters
 */
class PipeSourceParameters extends Shape
{
    /**
     * @param array{
     *     FilterCriteria?: FilterCriteria,
     *     KinesisStreamParameters?: PipeSourceKinesisStreamParameters,
     *     DynamoDBStreamParameters?: PipeSourceDynamoDBStreamParameters,
     *     SqsQueueParameters?: PipeSourceSqsQueueParameters,
     *     ActiveMQBrokerParameters?: PipeSourceActiveMQBrokerParameters,
     *     RabbitMQBrokerParameters?: PipeSourceRabbitMQBrokerParameters,
     *     ManagedStreamingKafkaParameters?: PipeSourceManagedStreamingKafkaParameters,
     *     SelfManagedKafkaParameters?: PipeSourceSelfManagedKafkaParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
