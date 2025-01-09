<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateOpsItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OpsItemId
 */
class RelatedOpsItem extends Shape
{
    /**
     * @param array{OpsItemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
