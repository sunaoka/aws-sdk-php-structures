<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\Publish;

trait PublishTrait
{
    /**
     * @param PublishRequest $args
     * @return void
     */
    public function publish(PublishRequest $args)
    {
        parent::publish($args->toArray());
    }
}
