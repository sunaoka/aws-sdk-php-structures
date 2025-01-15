<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $warehouse
 * @property string $stage
 * @property string $bucketName
 * @property string|null $bucketPrefix
 * @property string|null $privateLinkServiceName
 * @property string|null $accountName
 * @property string|null $region
 */
class SnowflakeConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     warehouse: string,
     *     stage: string,
     *     bucketName: string,
     *     bucketPrefix?: string|null,
     *     privateLinkServiceName?: string|null,
     *     accountName?: string|null,
     *     region?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
