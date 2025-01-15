<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $deliveryStreamName
 * @property string|null $separator
 * @property bool|null $batchMode
 */
class FirehoseAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     deliveryStreamName: string,
     *     separator?: string|null,
     *     batchMode?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
