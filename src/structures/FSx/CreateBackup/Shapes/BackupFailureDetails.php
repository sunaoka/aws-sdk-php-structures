<?php

namespace Sunaoka\Aws\Structures\FSx\CreateBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 */
class BackupFailureDetails extends Shape
{
    /**
     * @param array{Message?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
