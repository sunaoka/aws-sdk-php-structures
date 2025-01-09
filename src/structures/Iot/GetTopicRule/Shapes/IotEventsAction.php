<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputName
 * @property string $messageId
 * @property bool $batchMode
 * @property string $roleArn
 */
class IotEventsAction extends Shape
{
    /**
     * @param array{
     *     inputName: string,
     *     messageId?: string,
     *     batchMode?: bool,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
