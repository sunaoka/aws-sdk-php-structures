<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteRecommender;

trait DeleteRecommenderTrait
{
    /**
     * @param DeleteRecommenderRequest $args
     * @return void
     */
    public function deleteRecommender(DeleteRecommenderRequest $args)
    {
        parent::deleteRecommender($args->toArray());
    }
}
