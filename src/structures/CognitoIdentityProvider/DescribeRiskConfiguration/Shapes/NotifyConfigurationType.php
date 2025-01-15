<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeRiskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $From
 * @property string|null $ReplyTo
 * @property string $SourceArn
 * @property NotifyEmailType|null $BlockEmail
 * @property NotifyEmailType|null $NoActionEmail
 * @property NotifyEmailType|null $MfaEmail
 */
class NotifyConfigurationType extends Shape
{
    /**
     * @param array{
     *     From?: string|null,
     *     ReplyTo?: string|null,
     *     SourceArn: string,
     *     BlockEmail?: NotifyEmailType|null,
     *     NoActionEmail?: NotifyEmailType|null,
     *     MfaEmail?: NotifyEmailType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
