<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ResourceTypes
 */
class IndexAction extends Shape
{
    /**
     * @param array{ResourceTypes?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
