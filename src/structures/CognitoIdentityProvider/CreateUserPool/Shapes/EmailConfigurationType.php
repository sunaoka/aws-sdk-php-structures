<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceArn
 * @property string|null $ReplyToEmailAddress
 * @property 'COGNITO_DEFAULT'|'DEVELOPER'|null $EmailSendingAccount
 * @property string|null $From
 * @property string|null $ConfigurationSet
 */
class EmailConfigurationType extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string|null,
     *     ReplyToEmailAddress?: string|null,
     *     EmailSendingAccount?: 'COGNITO_DEFAULT'|'DEVELOPER'|null,
     *     From?: string|null,
     *     ConfigurationSet?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
