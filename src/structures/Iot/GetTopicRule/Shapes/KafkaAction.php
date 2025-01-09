<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationArn
 * @property string $topic
 * @property string $key
 * @property string $partition
 * @property array<string, string> $clientProperties
 * @property list<KafkaActionHeader> $headers
 */
class KafkaAction extends Shape
{
    /**
     * @param array{
     *     destinationArn: string,
     *     topic: string,
     *     key?: string,
     *     partition?: string,
     *     clientProperties: array<string, string>,
     *     headers?: list<KafkaActionHeader>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
