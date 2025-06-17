<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataProviderName
 * @property string|null $DataProviderArn
 * @property \Aws\Api\DateTimeResult|null $DataProviderCreationTime
 * @property string|null $Description
 * @property string|null $Engine
 * @property bool|null $Virtual
 * @property DataProviderSettings|null $Settings
 */
class DataProvider extends Shape
{
    /**
     * @param array{
     *     DataProviderName?: string|null,
     *     DataProviderArn?: string|null,
     *     DataProviderCreationTime?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Engine?: string|null,
     *     Virtual?: bool|null,
     *     Settings?: DataProviderSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
