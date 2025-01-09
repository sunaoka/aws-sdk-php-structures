<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $From
 * @property string $ReplyTo
 * @property string $SourceArn
 * @property NotifyEmailType $BlockEmail
 * @property NotifyEmailType $NoActionEmail
 * @property NotifyEmailType $MfaEmail
 */
class NotifyConfigurationType extends Shape
{
    /**
     * @param array{
     *     From?: string,
     *     ReplyTo?: string,
     *     SourceArn: string,
     *     BlockEmail?: NotifyEmailType,
     *     NoActionEmail?: NotifyEmailType,
     *     MfaEmail?: NotifyEmailType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
