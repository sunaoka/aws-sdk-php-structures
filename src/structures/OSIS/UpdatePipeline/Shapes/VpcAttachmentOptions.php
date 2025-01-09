<?php

namespace Sunaoka\Aws\Structures\OSIS\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AttachToVpc
 * @property string $CidrBlock
 */
class VpcAttachmentOptions extends Shape
{
    /**
     * @param array{
     *     AttachToVpc: bool,
     *     CidrBlock?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
