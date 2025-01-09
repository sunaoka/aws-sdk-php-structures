<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 * @property string $SmtpPassword
 */
class IngressPointConfiguration extends Shape
{
    /**
     * @param array{
     *     SecretArn?: string,
     *     SmtpPassword?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
