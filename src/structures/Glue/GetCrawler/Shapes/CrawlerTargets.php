<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3Target>|null $S3Targets
 * @property list<JdbcTarget>|null $JdbcTargets
 * @property list<MongoDBTarget>|null $MongoDBTargets
 * @property list<DynamoDBTarget>|null $DynamoDBTargets
 * @property list<CatalogTarget>|null $CatalogTargets
 * @property list<DeltaTarget>|null $DeltaTargets
 * @property list<IcebergTarget>|null $IcebergTargets
 * @property list<HudiTarget>|null $HudiTargets
 */
class CrawlerTargets extends Shape
{
    /**
     * @param array{
     *     S3Targets?: list<S3Target>|null,
     *     JdbcTargets?: list<JdbcTarget>|null,
     *     MongoDBTargets?: list<MongoDBTarget>|null,
     *     DynamoDBTargets?: list<DynamoDBTarget>|null,
     *     CatalogTargets?: list<CatalogTarget>|null,
     *     DeltaTargets?: list<DeltaTarget>|null,
     *     IcebergTargets?: list<IcebergTarget>|null,
     *     HudiTargets?: list<HudiTarget>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
