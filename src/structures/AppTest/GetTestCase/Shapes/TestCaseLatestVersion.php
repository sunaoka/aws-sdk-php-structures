<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $version
 * @property 'Active'|'Deleting' $status
 * @property string|null $statusReason
 */
class TestCaseLatestVersion extends Shape
{
    /**
     * @param array{
     *     version: int,
     *     status: 'Active'|'Deleting',
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
