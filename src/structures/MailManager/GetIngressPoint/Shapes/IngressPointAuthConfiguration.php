<?php

namespace Sunaoka\Aws\Structures\MailManager\GetIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressPointPasswordConfiguration|null $IngressPointPasswordConfiguration
 * @property string|null $SecretArn
 */
class IngressPointAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     IngressPointPasswordConfiguration?: IngressPointPasswordConfiguration|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
