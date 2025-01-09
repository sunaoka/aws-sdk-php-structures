<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'None specified'|'AWS Elastic BeanStalk'|'AWS Fargate'> $targetDestination
 */
class AwsManagedResources extends Shape
{
    /**
     * @param array{targetDestination: list<'None specified'|'AWS Elastic BeanStalk'|'AWS Fargate'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
