<?php

namespace Sunaoka\Aws\Structures\Personalize\ListRecipes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $recipeArn
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null $domain
 */
class RecipeSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     recipeArn?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     domain?: 'ECOMMERCE'|'VIDEO_ON_DEMAND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
