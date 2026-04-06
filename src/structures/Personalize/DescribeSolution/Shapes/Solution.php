<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $solutionArn
 * @property bool|null $performHPO
 * @property bool|null $performAutoML
 * @property bool|null $performAutoTraining
 * @property string|null $recipeArn
 * @property string|null $datasetGroupArn
 * @property string|null $eventType
 * @property SolutionConfig|null $solutionConfig
 * @property AutoMLResult|null $autoMLResult
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property SolutionVersionSummary|null $latestSolutionVersion
 * @property SolutionUpdateSummary|null $latestSolutionUpdate
 */
class Solution extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     solutionArn?: string|null,
     *     performHPO?: bool|null,
     *     performAutoML?: bool|null,
     *     performAutoTraining?: bool|null,
     *     recipeArn?: string|null,
     *     datasetGroupArn?: string|null,
     *     eventType?: string|null,
     *     solutionConfig?: SolutionConfig|null,
     *     autoMLResult?: AutoMLResult|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     latestSolutionVersion?: SolutionVersionSummary|null,
     *     latestSolutionUpdate?: SolutionUpdateSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
