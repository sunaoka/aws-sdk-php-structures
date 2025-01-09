<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $recipeArn
 * @property string $algorithmArn
 * @property string $featureTransformationArn
 * @property string $status
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property string $recipeType
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class Recipe extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     recipeArn?: string,
     *     algorithmArn?: string,
     *     featureTransformationArn?: string,
     *     status?: string,
     *     description?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     recipeType?: string,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
