<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SmtpPassword
 * @property string|null $SecretArn
 */
class IngressPointConfiguration extends Shape
{
    /**
     * @param array{
     *     SmtpPassword?: string|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
