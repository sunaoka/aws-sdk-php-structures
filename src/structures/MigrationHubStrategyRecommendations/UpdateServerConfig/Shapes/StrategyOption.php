<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\UpdateServerConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isPreferred
 * @property 'Rehost'|'Retirement'|'Refactor'|'Replatform'|'Retain'|'Relocate'|'Repurchase'|null $strategy
 * @property 'None specified'|'AWS Elastic BeanStalk'|'AWS Fargate'|'Amazon Elastic Cloud Compute (EC2)'|'Amazon Elastic Container Service (ECS)'|'Amazon Elastic Kubernetes Service (EKS)'|'Aurora MySQL'|'Aurora PostgreSQL'|'Amazon Relational Database Service on MySQL'|'Amazon Relational Database Service on PostgreSQL'|'Amazon DocumentDB'|'Amazon DynamoDB'|'Amazon Relational Database Service'|'Babelfish for Aurora PostgreSQL'|null $targetDestination
 * @property 'App2Container'|'Porting Assistant For .NET'|'End of Support Migration'|'Windows Web Application Migration Assistant'|'Application Migration Service'|'Strategy Recommendation Support'|'In Place Operating System Upgrade'|'Schema Conversion Tool'|'Database Migration Service'|'Native SQL Server Backup/Restore'|null $toolName
 */
class StrategyOption extends Shape
{
    /**
     * @param array{
     *     isPreferred?: bool|null,
     *     strategy?: 'Rehost'|'Retirement'|'Refactor'|'Replatform'|'Retain'|'Relocate'|'Repurchase'|null,
     *     targetDestination?: 'None specified'|'AWS Elastic BeanStalk'|'AWS Fargate'|'Amazon Elastic Cloud Compute (EC2)'|'Amazon Elastic Container Service (ECS)'|'Amazon Elastic Kubernetes Service (EKS)'|'Aurora MySQL'|'Aurora PostgreSQL'|'Amazon Relational Database Service on MySQL'|'Amazon Relational Database Service on PostgreSQL'|'Amazon DocumentDB'|'Amazon DynamoDB'|'Amazon Relational Database Service'|'Babelfish for Aurora PostgreSQL'|null,
     *     toolName?: 'App2Container'|'Porting Assistant For .NET'|'End of Support Migration'|'Windows Web Application Migration Assistant'|'Application Migration Service'|'Strategy Recommendation Support'|'In Place Operating System Upgrade'|'Schema Conversion Tool'|'Database Migration Service'|'Native SQL Server Backup/Restore'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
