<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpekeKeyProvider|null $SpekeKeyProvider
 */
class MsSmoothEncryptionSettings extends Shape
{
    /**
     * @param array{SpekeKeyProvider?: SpekeKeyProvider|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
