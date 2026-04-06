<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $PreviousSmtpPasswordExpiryTimestamp
 * @property string|null $PreviousSmtpPasswordVersion
 * @property string|null $SmtpPasswordVersion
 */
class IngressPointPasswordConfiguration extends Shape
{
    /**
     * @param array{
     *     PreviousSmtpPasswordExpiryTimestamp?: \Aws\Api\DateTimeResult|null,
     *     PreviousSmtpPasswordVersion?: string|null,
     *     SmtpPasswordVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
