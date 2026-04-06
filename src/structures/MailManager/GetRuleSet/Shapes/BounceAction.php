<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTINUE'|'DROP'|null $ActionFailurePolicy
 * @property string $RoleArn
 * @property string $Sender
 * @property string $StatusCode
 * @property string $SmtpReplyCode
 * @property string $DiagnosticMessage
 * @property string|null $Message
 */
class BounceAction extends Shape
{
    /**
     * @param array{
     *     ActionFailurePolicy?: 'CONTINUE'|'DROP'|null,
     *     RoleArn: string,
     *     Sender: string,
     *     StatusCode: string,
     *     SmtpReplyCode: string,
     *     DiagnosticMessage: string,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
