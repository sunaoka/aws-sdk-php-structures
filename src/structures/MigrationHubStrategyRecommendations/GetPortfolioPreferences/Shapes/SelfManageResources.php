<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'None specified'|'Amazon Elastic Cloud Compute (EC2)'|'Amazon Elastic Container Service (ECS)'|'Amazon Elastic Kubernetes Service (EKS)'> $targetDestination
 */
class SelfManageResources extends Shape
{
    /**
     * @param array{targetDestination: list<'None specified'|'Amazon Elastic Cloud Compute (EC2)'|'Amazon Elastic Container Service (ECS)'|'Amazon Elastic Kubernetes Service (EKS)'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
