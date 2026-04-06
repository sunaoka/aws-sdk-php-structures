<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBMajorEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $MajorEngineVersion
 * @property list<SupportedEngineLifecycle>|null $SupportedEngineLifecycles
 */
class DBMajorEngineVersion extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     MajorEngineVersion?: string|null,
     *     SupportedEngineLifecycles?: list<SupportedEngineLifecycle>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
