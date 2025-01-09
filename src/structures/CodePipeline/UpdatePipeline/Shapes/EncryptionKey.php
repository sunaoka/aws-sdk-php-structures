<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'KMS' $type
 */
class EncryptionKey extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: 'KMS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
