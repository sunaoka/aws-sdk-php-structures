<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $forceStop
 * @property string $importDataSetLocation
 */
class M2ManagedActionProperties extends Shape
{
    /**
     * @param array{
     *     forceStop?: bool,
     *     importDataSetLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
