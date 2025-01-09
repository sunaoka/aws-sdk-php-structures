<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $warehouse
 * @property string $stage
 * @property string $bucketName
 * @property string $bucketPrefix
 * @property string $privateLinkServiceName
 * @property string $accountName
 * @property string $region
 */
class SnowflakeConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     warehouse: string,
     *     stage: string,
     *     bucketName: string,
     *     bucketPrefix?: string,
     *     privateLinkServiceName?: string,
     *     accountName?: string,
     *     region?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
