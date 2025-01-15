<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputName
 * @property string|null $messageId
 * @property bool|null $batchMode
 * @property string $roleArn
 */
class IotEventsAction extends Shape
{
    /**
     * @param array{
     *     inputName: string,
     *     messageId?: string|null,
     *     batchMode?: bool|null,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
