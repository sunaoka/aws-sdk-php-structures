<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerName
 * @property int|null $Port
 * @property string|null $DatabaseName
 */
class RedshiftDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     DatabaseName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
