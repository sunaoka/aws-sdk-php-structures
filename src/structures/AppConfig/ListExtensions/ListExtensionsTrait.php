<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExtensions;

trait ListExtensionsTrait
{
    /**
     * @param ListExtensionsRequest $args
     * @return ListExtensionsResponse
     */
    public function listExtensions(ListExtensionsRequest $args)
    {
        $result = parent::listExtensions($args->toArray());
        return new ListExtensionsResponse($result->toArray());
    }
}
