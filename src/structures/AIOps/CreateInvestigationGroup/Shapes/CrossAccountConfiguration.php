<?php

namespace Sunaoka\Aws\Structures\AIOps\CreateInvestigationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceRoleArn
 */
class CrossAccountConfiguration extends Shape
{
    /**
     * @param array{sourceRoleArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
