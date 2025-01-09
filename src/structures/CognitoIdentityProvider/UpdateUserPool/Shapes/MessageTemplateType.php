<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SMSMessage
 * @property string $EmailMessage
 * @property string $EmailSubject
 */
class MessageTemplateType extends Shape
{
    /**
     * @param array{
     *     SMSMessage?: string,
     *     EmailMessage?: string,
     *     EmailSubject?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
