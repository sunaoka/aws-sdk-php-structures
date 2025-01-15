<?php

namespace Sunaoka\Aws\Structures\Personalize\ListSolutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $solutionArn
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $recipeArn
 */
class SolutionSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     solutionArn?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     recipeArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
