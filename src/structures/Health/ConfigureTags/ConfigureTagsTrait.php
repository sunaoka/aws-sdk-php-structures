<?php

namespace Sunaoka\Aws\Structures\Health\ConfigureTags;

trait ConfigureTagsTrait
{
    /**
     * @param ConfigureTagsRequest $args
     * @return ConfigureTagsResponse
     */
    public function configureTags(ConfigureTagsRequest $args)
    {
        $result = parent::configureTags($args->toArray());
        return new ConfigureTagsResponse($result->toArray());
    }
}
