<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'FAILED'|'SUCCEEDED'|null $status
 * @property ErrorDetail|null $error
 */
class AttachmentOutput extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     status?: 'FAILED'|'SUCCEEDED'|null,
     *     error?: ErrorDetail|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
