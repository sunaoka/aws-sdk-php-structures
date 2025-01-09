<?php

namespace Sunaoka\Aws\Structures\Translate\GetTerminology\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KMS' $Type
 * @property string $Id
 */
class EncryptionKey extends Shape
{
    /**
     * @param array{
     *     Type: 'KMS',
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
