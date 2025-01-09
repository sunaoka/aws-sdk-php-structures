<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterCriteria $FilterCriteria
 * @property UpdatePipeSourceKinesisStreamParameters $KinesisStreamParameters
 * @property UpdatePipeSourceDynamoDBStreamParameters $DynamoDBStreamParameters
 * @property UpdatePipeSourceSqsQueueParameters $SqsQueueParameters
 * @property UpdatePipeSourceActiveMQBrokerParameters $ActiveMQBrokerParameters
 * @property UpdatePipeSourceRabbitMQBrokerParameters $RabbitMQBrokerParameters
 * @property UpdatePipeSourceManagedStreamingKafkaParameters $ManagedStreamingKafkaParameters
 * @property UpdatePipeSourceSelfManagedKafkaParameters $SelfManagedKafkaParameters
 */
class UpdatePipeSourceParameters extends Shape
{
    /**
     * @param array{
     *     FilterCriteria?: FilterCriteria,
     *     KinesisStreamParameters?: UpdatePipeSourceKinesisStreamParameters,
     *     DynamoDBStreamParameters?: UpdatePipeSourceDynamoDBStreamParameters,
     *     SqsQueueParameters?: UpdatePipeSourceSqsQueueParameters,
     *     ActiveMQBrokerParameters?: UpdatePipeSourceActiveMQBrokerParameters,
     *     RabbitMQBrokerParameters?: UpdatePipeSourceRabbitMQBrokerParameters,
     *     ManagedStreamingKafkaParameters?: UpdatePipeSourceManagedStreamingKafkaParameters,
     *     SelfManagedKafkaParameters?: UpdatePipeSourceSelfManagedKafkaParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
