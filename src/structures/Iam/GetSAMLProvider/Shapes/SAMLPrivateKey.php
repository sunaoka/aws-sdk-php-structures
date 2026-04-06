<?php

namespace Sunaoka\Aws\Structures\Iam\GetSAMLProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyId
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class SAMLPrivateKey extends Shape
{
    /**
     * @param array{
     *     KeyId?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
