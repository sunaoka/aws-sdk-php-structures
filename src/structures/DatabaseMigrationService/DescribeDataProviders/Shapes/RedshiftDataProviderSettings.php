<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeDataProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerName
 * @property int $Port
 * @property string $DatabaseName
 */
class RedshiftDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string,
     *     Port?: int,
     *     DatabaseName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
