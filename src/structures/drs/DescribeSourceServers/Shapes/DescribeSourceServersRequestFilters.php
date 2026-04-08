<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $sourceServerIDs
 * @property string|null $hardwareId
 * @property list<string>|null $stagingAccountIDs
 */
class DescribeSourceServersRequestFilters extends Shape
{
    /**
     * @param array{
     *     sourceServerIDs?: list<string>|null,
     *     hardwareId?: string|null,
     *     stagingAccountIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
