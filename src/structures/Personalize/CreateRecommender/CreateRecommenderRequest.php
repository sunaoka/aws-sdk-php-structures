<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateRecommender;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $datasetGroupArn
 * @property string $recipeArn
 * @property Shapes\RecommenderConfig|null $recommenderConfig
 * @property list<Shapes\Tag>|null $tags
 */
class CreateRecommenderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     datasetGroupArn: string,
     *     recipeArn: string,
     *     recommenderConfig?: Shapes\RecommenderConfig|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
