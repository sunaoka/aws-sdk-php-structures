<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property 'Configure'|'Deconfigure' $actionType
 */
class M2NonManagedApplicationAction extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     actionType: 'Configure'|'Deconfigure'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
