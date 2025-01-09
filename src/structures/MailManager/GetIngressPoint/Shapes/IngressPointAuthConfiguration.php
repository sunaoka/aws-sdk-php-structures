<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressPointPasswordConfiguration $IngressPointPasswordConfiguration
 * @property string $SecretArn
 */
class IngressPointAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     IngressPointPasswordConfiguration?: IngressPointPasswordConfiguration,
     *     SecretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
