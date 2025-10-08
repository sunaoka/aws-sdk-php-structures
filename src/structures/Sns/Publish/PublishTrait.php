<?php

namespace Sunaoka\Aws\Structures\Sns\Publish;

trait PublishTrait
{
    /**
     * @param PublishRequest $args
     * @return PublishResponse
     */
    public function publish(PublishRequest $args)
    {
        $result = parent::publish($args->toArray());
        return new PublishResponse($result->toArray());
    }
}
