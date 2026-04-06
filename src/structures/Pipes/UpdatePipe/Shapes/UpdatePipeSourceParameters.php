<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatePipeSourceActiveMQBrokerParameters|null $ActiveMQBrokerParameters
 * @property UpdatePipeSourceDynamoDBStreamParameters|null $DynamoDBStreamParameters
 * @property FilterCriteria|null $FilterCriteria
 * @property UpdatePipeSourceKinesisStreamParameters|null $KinesisStreamParameters
 * @property UpdatePipeSourceManagedStreamingKafkaParameters|null $ManagedStreamingKafkaParameters
 * @property UpdatePipeSourceRabbitMQBrokerParameters|null $RabbitMQBrokerParameters
 * @property UpdatePipeSourceSelfManagedKafkaParameters|null $SelfManagedKafkaParameters
 * @property UpdatePipeSourceSqsQueueParameters|null $SqsQueueParameters
 */
class UpdatePipeSourceParameters extends Shape
{
    /**
     * @param array{
     *     ActiveMQBrokerParameters?: UpdatePipeSourceActiveMQBrokerParameters|null,
     *     DynamoDBStreamParameters?: UpdatePipeSourceDynamoDBStreamParameters|null,
     *     FilterCriteria?: FilterCriteria|null,
     *     KinesisStreamParameters?: UpdatePipeSourceKinesisStreamParameters|null,
     *     ManagedStreamingKafkaParameters?: UpdatePipeSourceManagedStreamingKafkaParameters|null,
     *     RabbitMQBrokerParameters?: UpdatePipeSourceRabbitMQBrokerParameters|null,
     *     SelfManagedKafkaParameters?: UpdatePipeSourceSelfManagedKafkaParameters|null,
     *     SqsQueueParameters?: UpdatePipeSourceSqsQueueParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
