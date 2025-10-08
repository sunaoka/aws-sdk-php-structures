<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImageBuilderStreamingURL;

trait CreateImageBuilderStreamingURLTrait
{
    /**
     * @param CreateImageBuilderStreamingURLRequest $args
     * @return CreateImageBuilderStreamingURLResponse
     */
    public function createImageBuilderStreamingURL(CreateImageBuilderStreamingURLRequest $args)
    {
        $result = parent::createImageBuilderStreamingURL($args->toArray());
        return new CreateImageBuilderStreamingURLResponse($result->toArray());
    }
}
