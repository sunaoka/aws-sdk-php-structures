<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SmsMessage
 * @property string|null $EmailMessage
 * @property string|null $EmailSubject
 * @property string|null $EmailMessageByLink
 * @property string|null $EmailSubjectByLink
 * @property 'CONFIRM_WITH_LINK'|'CONFIRM_WITH_CODE'|null $DefaultEmailOption
 */
class VerificationMessageTemplateType extends Shape
{
    /**
     * @param array{
     *     SmsMessage?: string|null,
     *     EmailMessage?: string|null,
     *     EmailSubject?: string|null,
     *     EmailMessageByLink?: string|null,
     *     EmailSubjectByLink?: string|null,
     *     DefaultEmailOption?: 'CONFIRM_WITH_LINK'|'CONFIRM_WITH_CODE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
