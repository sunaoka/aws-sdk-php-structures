<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateRecommender;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recommenderArn
 * @property Shapes\RecommenderConfig $recommenderConfig
 */
class UpdateRecommenderRequest extends Request
{
    /**
     * @param array{
     *     recommenderArn: string,
     *     recommenderConfig: Shapes\RecommenderConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
