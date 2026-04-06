<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeDataProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataProviderName
 * @property string|null $DataProviderArn
 * @property \Aws\Api\DateTimeResult|null $DataProviderCreationTime
 * @property string|null $Description
 * @property string|null $Engine
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
     *     Settings?: DataProviderSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
