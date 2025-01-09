<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property 'Configure'|'Deconfigure' $actionType
 * @property M2ManagedActionProperties $properties
 */
class M2ManagedApplicationAction extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     actionType: 'Configure'|'Deconfigure',
     *     properties?: M2ManagedActionProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
