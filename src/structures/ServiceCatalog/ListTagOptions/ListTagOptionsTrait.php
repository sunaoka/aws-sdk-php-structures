<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListTagOptions;

trait ListTagOptionsTrait
{
    /**
     * @param ListTagOptionsRequest $args
     * @return ListTagOptionsResponse
     */
    public function listTagOptions(ListTagOptionsRequest $args)
    {
        $result = parent::listTagOptions($args->toArray());
        return new ListTagOptionsResponse($result->toArray());
    }
}
