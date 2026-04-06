<?php

namespace Sunaoka\Aws\Structures\Backup\UpdateBackupPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ResourceTypes
 */
class IndexAction extends Shape
{
    /**
     * @param array{ResourceTypes?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
