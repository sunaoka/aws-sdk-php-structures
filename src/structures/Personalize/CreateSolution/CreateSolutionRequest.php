<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property bool|null $performHPO
 * @property bool|null $performAutoML
 * @property bool|null $performAutoTraining
 * @property bool|null $performIncrementalUpdate
 * @property string|null $recipeArn
 * @property string $datasetGroupArn
 * @property string|null $eventType
 * @property Shapes\SolutionConfig|null $solutionConfig
 * @property list<Shapes\Tag>|null $tags
 */
class CreateSolutionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     performHPO?: bool|null,
     *     performAutoML?: bool|null,
     *     performAutoTraining?: bool|null,
     *     performIncrementalUpdate?: bool|null,
     *     recipeArn?: string|null,
     *     datasetGroupArn: string,
     *     eventType?: string|null,
     *     solutionConfig?: Shapes\SolutionConfig|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
