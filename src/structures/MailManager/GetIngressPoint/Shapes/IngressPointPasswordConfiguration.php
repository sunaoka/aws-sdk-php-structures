<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SmtpPasswordVersion
 * @property string|null $PreviousSmtpPasswordVersion
 * @property \Aws\Api\DateTimeResult|null $PreviousSmtpPasswordExpiryTimestamp
 */
class IngressPointPasswordConfiguration extends Shape
{
    /**
     * @param array{
     *     SmtpPasswordVersion?: string|null,
     *     PreviousSmtpPasswordVersion?: string|null,
     *     PreviousSmtpPasswordExpiryTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
