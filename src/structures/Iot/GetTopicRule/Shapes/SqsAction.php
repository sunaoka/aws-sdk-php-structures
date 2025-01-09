<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $queueUrl
 * @property bool $useBase64
 */
class SqsAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     queueUrl: string,
     *     useBase64?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
