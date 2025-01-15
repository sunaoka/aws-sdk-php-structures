<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hardwareId
 * @property list<string>|null $sourceServerIDs
 * @property list<string>|null $stagingAccountIDs
 */
class DescribeSourceServersRequestFilters extends Shape
{
    /**
     * @param array{
     *     hardwareId?: string|null,
     *     sourceServerIDs?: list<string>|null,
     *     stagingAccountIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
