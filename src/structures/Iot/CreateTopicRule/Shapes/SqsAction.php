<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $queueUrl
 * @property bool|null $useBase64
 */
class SqsAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     queueUrl: string,
     *     useBase64?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
