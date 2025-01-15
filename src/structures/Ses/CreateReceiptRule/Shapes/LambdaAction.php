<?php

namespace Sunaoka\Aws\Structures\Ses\CreateReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TopicArn
 * @property string $FunctionArn
 * @property 'Event'|'RequestResponse'|null $InvocationType
 */
class LambdaAction extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string|null,
     *     FunctionArn: string,
     *     InvocationType?: 'Event'|'RequestResponse'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
