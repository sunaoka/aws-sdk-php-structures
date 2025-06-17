<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerName
 * @property int|null $Port
 * @property string|null $DatabaseName
 * @property string|null $S3Path
 * @property string|null $S3AccessRoleArn
 */
class RedshiftDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     DatabaseName?: string|null,
     *     S3Path?: string|null,
     *     S3AccessRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
