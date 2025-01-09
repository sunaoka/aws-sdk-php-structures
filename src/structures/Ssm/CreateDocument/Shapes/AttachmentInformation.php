<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class AttachmentInformation extends Shape
{
    /**
     * @param array{Name?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
