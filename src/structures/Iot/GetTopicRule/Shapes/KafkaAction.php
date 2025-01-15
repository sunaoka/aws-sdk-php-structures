<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationArn
 * @property string $topic
 * @property string|null $key
 * @property string|null $partition
 * @property array<string, string> $clientProperties
 * @property list<KafkaActionHeader>|null $headers
 */
class KafkaAction extends Shape
{
    /**
     * @param array{
     *     destinationArn: string,
     *     topic: string,
     *     key?: string|null,
     *     partition?: string|null,
     *     clientProperties: array<string, string>,
     *     headers?: list<KafkaActionHeader>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
