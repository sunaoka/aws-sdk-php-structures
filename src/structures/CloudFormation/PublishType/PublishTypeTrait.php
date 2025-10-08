<?php

namespace Sunaoka\Aws\Structures\CloudFormation\PublishType;

trait PublishTypeTrait
{
    /**
     * @param PublishTypeRequest $args
     * @return PublishTypeResponse
     */
    public function publishType(PublishTypeRequest $args)
    {
        $result = parent::publishType($args->toArray());
        return new PublishTypeResponse($result->toArray());
    }
}
