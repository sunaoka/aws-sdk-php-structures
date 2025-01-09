<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $deliveryStreamName
 * @property string $separator
 * @property bool $batchMode
 */
class FirehoseAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     deliveryStreamName: string,
     *     separator?: string,
     *     batchMode?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
