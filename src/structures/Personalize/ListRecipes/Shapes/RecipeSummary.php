<?php

namespace Sunaoka\Aws\Structures\Personalize\ListRecipes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $recipeArn
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND' $domain
 */
class RecipeSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     recipeArn?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
