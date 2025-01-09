<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property bool $performHPO
 * @property bool $performAutoML
 * @property bool $performAutoTraining
 * @property string $recipeArn
 * @property string $datasetGroupArn
 * @property string $eventType
 * @property Shapes\SolutionConfig $solutionConfig
 * @property list<Shapes\Tag> $tags
 */
class CreateSolutionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     performHPO?: bool,
     *     performAutoML?: bool,
     *     performAutoTraining?: bool,
     *     recipeArn?: string,
     *     datasetGroupArn: string,
     *     eventType?: string,
     *     solutionConfig?: Shapes\SolutionConfig,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
