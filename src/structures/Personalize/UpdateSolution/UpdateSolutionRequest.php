<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateSolution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionArn
 * @property bool $performAutoTraining
 * @property Shapes\SolutionUpdateConfig $solutionUpdateConfig
 */
class UpdateSolutionRequest extends Request
{
    /**
     * @param array{
     *     solutionArn: string,
     *     performAutoTraining?: bool,
     *     solutionUpdateConfig?: Shapes\SolutionUpdateConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
