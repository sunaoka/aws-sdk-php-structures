<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseUrl
 * @property string $bucketName
 * @property string $bucketPrefix
 * @property string $roleArn
 * @property string $dataApiRoleArn
 * @property bool $isRedshiftServerless
 * @property string $clusterIdentifier
 * @property string $workgroupName
 * @property string $databaseName
 */
class RedshiftConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     databaseUrl?: string,
     *     bucketName: string,
     *     bucketPrefix?: string,
     *     roleArn: string,
     *     dataApiRoleArn?: string,
     *     isRedshiftServerless?: bool,
     *     clusterIdentifier?: string,
     *     workgroupName?: string,
     *     databaseName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
