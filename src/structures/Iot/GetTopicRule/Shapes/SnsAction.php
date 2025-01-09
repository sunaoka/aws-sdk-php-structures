<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetArn
 * @property string $roleArn
 * @property 'RAW'|'JSON' $messageFormat
 */
class SnsAction extends Shape
{
    /**
     * @param array{
     *     targetArn: string,
     *     roleArn: string,
     *     messageFormat?: 'RAW'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
