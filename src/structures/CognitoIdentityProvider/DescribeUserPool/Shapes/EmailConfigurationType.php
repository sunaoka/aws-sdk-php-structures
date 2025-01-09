<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $ReplyToEmailAddress
 * @property 'COGNITO_DEFAULT'|'DEVELOPER' $EmailSendingAccount
 * @property string $From
 * @property string $ConfigurationSet
 */
class EmailConfigurationType extends Shape
{
    /**
     * @param array{
     *     SourceArn?: string,
     *     ReplyToEmailAddress?: string,
     *     EmailSendingAccount?: 'COGNITO_DEFAULT'|'DEVELOPER',
     *     From?: string,
     *     ConfigurationSet?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
