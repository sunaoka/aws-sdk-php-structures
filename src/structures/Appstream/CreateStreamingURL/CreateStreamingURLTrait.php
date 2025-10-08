<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStreamingURL;

trait CreateStreamingURLTrait
{
    /**
     * @param CreateStreamingURLRequest $args
     * @return CreateStreamingURLResponse
     */
    public function createStreamingURL(CreateStreamingURLRequest $args)
    {
        $result = parent::createStreamingURL($args->toArray());
        return new CreateStreamingURLResponse($result->toArray());
    }
}
