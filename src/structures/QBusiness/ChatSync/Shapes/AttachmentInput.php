<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 */
class AttachmentInput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     data: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
