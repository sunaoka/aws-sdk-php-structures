<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicArn
 * @property string $FunctionArn
 * @property 'Event'|'RequestResponse' $InvocationType
 */
class LambdaAction extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string,
     *     FunctionArn: string,
     *     InvocationType?: 'Event'|'RequestResponse'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
