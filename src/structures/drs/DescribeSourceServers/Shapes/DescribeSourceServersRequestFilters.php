<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hardwareId
 * @property list<string> $sourceServerIDs
 * @property list<string> $stagingAccountIDs
 */
class DescribeSourceServersRequestFilters extends Shape
{
    /**
     * @param array{
     *     hardwareId?: string,
     *     sourceServerIDs?: list<string>,
     *     stagingAccountIDs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
