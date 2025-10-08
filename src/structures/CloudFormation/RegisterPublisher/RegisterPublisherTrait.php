<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RegisterPublisher;

trait RegisterPublisherTrait
{
    /**
     * @param RegisterPublisherRequest $args
     * @return RegisterPublisherResponse
     */
    public function registerPublisher(RegisterPublisherRequest $args)
    {
        $result = parent::registerPublisher($args->toArray());
        return new RegisterPublisherResponse($result->toArray());
    }
}
