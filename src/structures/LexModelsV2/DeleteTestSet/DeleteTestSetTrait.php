<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteTestSet;

trait DeleteTestSetTrait
{
    /**
     * @param DeleteTestSetRequest $args
     * @return void
     */
    public function deleteTestSet(DeleteTestSetRequest $args)
    {
        parent::deleteTestSet($args->toArray());
    }
}
