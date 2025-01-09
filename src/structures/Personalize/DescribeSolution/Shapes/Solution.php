<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $solutionArn
 * @property bool $performHPO
 * @property bool $performAutoML
 * @property bool $performAutoTraining
 * @property string $recipeArn
 * @property string $datasetGroupArn
 * @property string $eventType
 * @property SolutionConfig $solutionConfig
 * @property AutoMLResult $autoMLResult
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property SolutionVersionSummary $latestSolutionVersion
 * @property SolutionUpdateSummary $latestSolutionUpdate
 */
class Solution extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     solutionArn?: string,
     *     performHPO?: bool,
     *     performAutoML?: bool,
     *     performAutoTraining?: bool,
     *     recipeArn?: string,
     *     datasetGroupArn?: string,
     *     eventType?: string,
     *     solutionConfig?: SolutionConfig,
     *     autoMLResult?: AutoMLResult,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     latestSolutionVersion?: SolutionVersionSummary,
     *     latestSolutionUpdate?: SolutionUpdateSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
