<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterCriteria|null $FilterCriteria
 * @property UpdatePipeSourceKinesisStreamParameters|null $KinesisStreamParameters
 * @property UpdatePipeSourceDynamoDBStreamParameters|null $DynamoDBStreamParameters
 * @property UpdatePipeSourceSqsQueueParameters|null $SqsQueueParameters
 * @property UpdatePipeSourceActiveMQBrokerParameters|null $ActiveMQBrokerParameters
 * @property UpdatePipeSourceRabbitMQBrokerParameters|null $RabbitMQBrokerParameters
 * @property UpdatePipeSourceManagedStreamingKafkaParameters|null $ManagedStreamingKafkaParameters
 * @property UpdatePipeSourceSelfManagedKafkaParameters|null $SelfManagedKafkaParameters
 */
class UpdatePipeSourceParameters extends Shape
{
    /**
     * @param array{
     *     FilterCriteria?: FilterCriteria|null,
     *     KinesisStreamParameters?: UpdatePipeSourceKinesisStreamParameters|null,
     *     DynamoDBStreamParameters?: UpdatePipeSourceDynamoDBStreamParameters|null,
     *     SqsQueueParameters?: UpdatePipeSourceSqsQueueParameters|null,
     *     ActiveMQBrokerParameters?: UpdatePipeSourceActiveMQBrokerParameters|null,
     *     RabbitMQBrokerParameters?: UpdatePipeSourceRabbitMQBrokerParameters|null,
     *     ManagedStreamingKafkaParameters?: UpdatePipeSourceManagedStreamingKafkaParameters|null,
     *     SelfManagedKafkaParameters?: UpdatePipeSourceSelfManagedKafkaParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
