<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsRegion
 * @property string|null $dbClusterIdentifier
 * @property string|null $databaseName
 * @property string|null $schema
 * @property string|null $awsSecretStoreArn
 */
class RdsHttpEndpointConfig extends Shape
{
    /**
     * @param array{
     *     awsRegion?: string|null,
     *     dbClusterIdentifier?: string|null,
     *     databaseName?: string|null,
     *     schema?: string|null,
     *     awsSecretStoreArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
