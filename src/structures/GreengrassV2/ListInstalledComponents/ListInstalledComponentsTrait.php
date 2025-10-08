<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListInstalledComponents;

trait ListInstalledComponentsTrait
{
    /**
     * @param ListInstalledComponentsRequest $args
     * @return ListInstalledComponentsResponse
     */
    public function listInstalledComponents(ListInstalledComponentsRequest $args)
    {
        $result = parent::listInstalledComponents($args->toArray());
        return new ListInstalledComponentsResponse($result->toArray());
    }
}
