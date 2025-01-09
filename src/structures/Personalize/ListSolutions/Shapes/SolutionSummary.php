<?php

namespace Sunaoka\Aws\Structures\Personalize\ListSolutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $solutionArn
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $recipeArn
 */
class SolutionSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     solutionArn?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     recipeArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
