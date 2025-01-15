<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $databaseUrl
 * @property string $bucketName
 * @property string|null $bucketPrefix
 * @property string $roleArn
 * @property string|null $dataApiRoleArn
 * @property bool|null $isRedshiftServerless
 * @property string|null $clusterIdentifier
 * @property string|null $workgroupName
 * @property string|null $databaseName
 */
class RedshiftConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     databaseUrl?: string|null,
     *     bucketName: string,
     *     bucketPrefix?: string|null,
     *     roleArn: string,
     *     dataApiRoleArn?: string|null,
     *     isRedshiftServerless?: bool|null,
     *     clusterIdentifier?: string|null,
     *     workgroupName?: string|null,
     *     databaseName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
