<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateSolution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionArn
 * @property bool|null $performAutoTraining
 * @property bool|null $performIncrementalUpdate
 * @property Shapes\SolutionUpdateConfig|null $solutionUpdateConfig
 */
class UpdateSolutionRequest extends Request
{
    /**
     * @param array{
     *     solutionArn: string,
     *     performAutoTraining?: bool|null,
     *     performIncrementalUpdate?: bool|null,
     *     solutionUpdateConfig?: Shapes\SolutionUpdateConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
