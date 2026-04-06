<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretArn
 * @property string|null $SmtpPassword
 */
class IngressPointConfiguration extends Shape
{
    /**
     * @param array{
     *     SecretArn?: string|null,
     *     SmtpPassword?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
