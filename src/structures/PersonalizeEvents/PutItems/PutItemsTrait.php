<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutItems;

trait PutItemsTrait
{
    /**
     * @param PutItemsRequest $args
     * @return void
     */
    public function putItems(PutItemsRequest $args)
    {
        parent::putItems($args->toArray());
    }
}
