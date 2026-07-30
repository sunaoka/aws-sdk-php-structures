<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecordConverter $RecordConverter
 * @property RecordSchema|null $RecordSchema
 * @property string $TopicArn
 */
class TopicConfiguration extends Shape
{
    /**
     * @param array{
     *     RecordConverter: RecordConverter,
     *     RecordSchema?: RecordSchema|null,
     *     TopicArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
