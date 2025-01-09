<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SmsMessage
 * @property string $EmailMessage
 * @property string $EmailSubject
 * @property string $EmailMessageByLink
 * @property string $EmailSubjectByLink
 * @property 'CONFIRM_WITH_LINK'|'CONFIRM_WITH_CODE' $DefaultEmailOption
 */
class VerificationMessageTemplateType extends Shape
{
    /**
     * @param array{
     *     SmsMessage?: string,
     *     EmailMessage?: string,
     *     EmailSubject?: string,
     *     EmailMessageByLink?: string,
     *     EmailSubjectByLink?: string,
     *     DefaultEmailOption?: 'CONFIRM_WITH_LINK'|'CONFIRM_WITH_CODE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
