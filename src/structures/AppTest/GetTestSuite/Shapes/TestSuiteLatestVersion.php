<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $version
 * @property 'Creating'|'Updating'|'Active'|'Failed'|'Deleting' $status
 * @property string|null $statusReason
 */
class TestSuiteLatestVersion extends Shape
{
    /**
     * @param array{
     *     version: int,
     *     status: 'Creating'|'Updating'|'Active'|'Failed'|'Deleting',
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
