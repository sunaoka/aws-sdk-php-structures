<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $recipeArn
 * @property string|null $algorithmArn
 * @property string|null $featureTransformationArn
 * @property string|null $status
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property string|null $recipeType
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class Recipe extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     recipeArn?: string|null,
     *     algorithmArn?: string|null,
     *     featureTransformationArn?: string|null,
     *     status?: string|null,
     *     description?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     recipeType?: string|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
