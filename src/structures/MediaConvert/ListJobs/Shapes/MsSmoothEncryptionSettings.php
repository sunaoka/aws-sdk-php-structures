<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class MsSmoothEncryptionSettings extends Shape
{
    /**
     * @param array{SpekeKeyProvider?: SpekeKeyProvider} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
