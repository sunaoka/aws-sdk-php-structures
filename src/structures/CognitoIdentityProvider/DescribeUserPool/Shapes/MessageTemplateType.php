<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SMSMessage
 * @property string|null $EmailMessage
 * @property string|null $EmailSubject
 */
class MessageTemplateType extends Shape
{
    /**
     * @param array{
     *     SMSMessage?: string|null,
     *     EmailMessage?: string|null,
     *     EmailSubject?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
