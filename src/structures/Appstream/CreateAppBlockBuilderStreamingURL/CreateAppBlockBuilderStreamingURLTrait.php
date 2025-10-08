<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateAppBlockBuilderStreamingURL;

trait CreateAppBlockBuilderStreamingURLTrait
{
    /**
     * @param CreateAppBlockBuilderStreamingURLRequest $args
     * @return CreateAppBlockBuilderStreamingURLResponse
     */
    public function createAppBlockBuilderStreamingURL(CreateAppBlockBuilderStreamingURLRequest $args)
    {
        $result = parent::createAppBlockBuilderStreamingURL($args->toArray());
        return new CreateAppBlockBuilderStreamingURLResponse($result->toArray());
    }
}
