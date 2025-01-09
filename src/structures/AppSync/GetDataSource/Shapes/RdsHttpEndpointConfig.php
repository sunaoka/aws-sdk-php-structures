<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsRegion
 * @property string $dbClusterIdentifier
 * @property string $databaseName
 * @property string $schema
 * @property string $awsSecretStoreArn
 */
class RdsHttpEndpointConfig extends Shape
{
    /**
     * @param array{
     *     awsRegion?: string,
     *     dbClusterIdentifier?: string,
     *     databaseName?: string,
     *     schema?: string,
     *     awsSecretStoreArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
