<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeDataProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataProviderName
 * @property string $DataProviderArn
 * @property \Aws\Api\DateTimeResult $DataProviderCreationTime
 * @property string $Description
 * @property string $Engine
 * @property DataProviderSettings $Settings
 */
class DataProvider extends Shape
{
    /**
     * @param array{
     *     DataProviderName?: string,
     *     DataProviderArn?: string,
     *     DataProviderCreationTime?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Engine?: string,
     *     Settings?: DataProviderSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
