<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3Target> $S3Targets
 * @property list<JdbcTarget> $JdbcTargets
 * @property list<MongoDBTarget> $MongoDBTargets
 * @property list<DynamoDBTarget> $DynamoDBTargets
 * @property list<CatalogTarget> $CatalogTargets
 * @property list<DeltaTarget> $DeltaTargets
 * @property list<IcebergTarget> $IcebergTargets
 * @property list<HudiTarget> $HudiTargets
 */
class CrawlerTargets extends Shape
{
    /**
     * @param array{
     *     S3Targets?: list<S3Target>,
     *     JdbcTargets?: list<JdbcTarget>,
     *     MongoDBTargets?: list<MongoDBTarget>,
     *     DynamoDBTargets?: list<DynamoDBTarget>,
     *     CatalogTargets?: list<CatalogTarget>,
     *     DeltaTargets?: list<DeltaTarget>,
     *     IcebergTargets?: list<IcebergTarget>,
     *     HudiTargets?: list<HudiTarget>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
