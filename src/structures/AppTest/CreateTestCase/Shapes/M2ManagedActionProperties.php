<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestCase\Shapes;

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
