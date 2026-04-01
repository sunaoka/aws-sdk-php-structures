<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateIngressPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CAContent
 * @property string|null $CrlContent
 * @property string|null $KmsKeyArn
 */
class TrustStore extends Shape
{
    /**
     * @param array{
     *     CAContent: string,
     *     CrlContent?: string|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
