<?php

namespace Sunaoka\Aws\Structures\OSIS\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AttachToVpc
 * @property string|null $CidrBlock
 */
class VpcAttachmentOptions extends Shape
{
    /**
     * @param array{
     *     AttachToVpc: bool,
     *     CidrBlock?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
