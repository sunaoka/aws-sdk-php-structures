<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateHybridAD\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 */
class HybridAdministratorAccountUpdate extends Shape
{
    /**
     * @param array{SecretArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
