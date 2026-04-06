<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $forceStop
 * @property string|null $importDataSetLocation
 */
class M2ManagedActionProperties extends Shape
{
    /**
     * @param array{
     *     forceStop?: bool|null,
     *     importDataSetLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
