<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property 'Configure'|'Deconfigure' $actionType
 * @property M2ManagedActionProperties|null $properties
 */
class M2ManagedApplicationAction extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     actionType: 'Configure'|'Deconfigure',
     *     properties?: M2ManagedActionProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
