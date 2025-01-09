<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Rehost'|'Retirement'|'Refactor'|'Replatform'|'Retain'|'Relocate'|'Repurchase' $strategy
 * @property 'None specified'|'AWS Elastic BeanStalk'|'AWS Fargate'|'Amazon Elastic Cloud Compute (EC2)'|'Amazon Elastic Container Service (ECS)'|'Amazon Elastic Kubernetes Service (EKS)'|'Aurora MySQL'|'Aurora PostgreSQL'|'Amazon Relational Database Service on MySQL'|'Amazon Relational Database Service on PostgreSQL'|'Amazon DocumentDB'|'Amazon DynamoDB'|'Amazon Relational Database Service'|'Babelfish for Aurora PostgreSQL' $targetDestination
 * @property TransformationTool $transformationTool
 */
class RecommendationSet extends Shape
{
    /**
     * @param array{
     *     strategy?: 'Rehost'|'Retirement'|'Refactor'|'Replatform'|'Retain'|'Relocate'|'Repurchase',
     *     targetDestination?: 'None specified'|'AWS Elastic BeanStalk'|'AWS Fargate'|'Amazon Elastic Cloud Compute (EC2)'|'Amazon Elastic Container Service (ECS)'|'Amazon Elastic Kubernetes Service (EKS)'|'Aurora MySQL'|'Aurora PostgreSQL'|'Amazon Relational Database Service on MySQL'|'Amazon Relational Database Service on PostgreSQL'|'Amazon DocumentDB'|'Amazon DynamoDB'|'Amazon Relational Database Service'|'Babelfish for Aurora PostgreSQL',
     *     transformationTool?: TransformationTool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
