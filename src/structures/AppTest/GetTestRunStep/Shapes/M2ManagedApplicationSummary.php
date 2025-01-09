<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property 'MicroFocus' $runtime
 * @property int $listenerPort
 */
class M2ManagedApplicationSummary extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     runtime: 'MicroFocus',
     *     listenerPort?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
