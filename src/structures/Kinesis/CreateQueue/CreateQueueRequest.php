<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueName
 * @property list<Shapes\QueueStreamConfiguration> $StreamConfigurationList
 * @property Shapes\QueueAttributes|null $QueueAttributes
 * @property array<string, string>|null $Tags
 */
class CreateQueueRequest extends Request
{
    /**
     * @param array{
     *     QueueName: string,
     *     StreamConfigurationList: list<Shapes\QueueStreamConfiguration>,
     *     QueueAttributes?: Shapes\QueueAttributes|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
