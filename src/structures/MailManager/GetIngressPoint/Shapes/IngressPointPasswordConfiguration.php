<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $PreviousSmtpPasswordExpiryTimestamp
 * @property string $PreviousSmtpPasswordVersion
 * @property string $SmtpPasswordVersion
 */
class IngressPointPasswordConfiguration extends Shape
{
    /**
     * @param array{
     *     PreviousSmtpPasswordExpiryTimestamp?: \Aws\Api\DateTimeResult,
     *     PreviousSmtpPasswordVersion?: string,
     *     SmtpPasswordVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
