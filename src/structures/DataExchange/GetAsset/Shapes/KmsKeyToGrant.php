<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyArn
 */
class KmsKeyToGrant extends Shape
{
    /**
     * @param array{KmsKeyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
