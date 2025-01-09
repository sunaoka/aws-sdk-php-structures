<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $SnsTopicArn
 * @property 'LONG_TEXT'|'SHORT_TEXT'|'JSON' $SnsFormat
 */
class SNSConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     SnsTopicArn: string,
     *     SnsFormat?: 'LONG_TEXT'|'SHORT_TEXT'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
