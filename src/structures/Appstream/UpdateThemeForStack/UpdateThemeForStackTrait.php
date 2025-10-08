<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateThemeForStack;

trait UpdateThemeForStackTrait
{
    /**
     * @param UpdateThemeForStackRequest $args
     * @return UpdateThemeForStackResponse
     */
    public function updateThemeForStack(UpdateThemeForStackRequest $args)
    {
        $result = parent::updateThemeForStack($args->toArray());
        return new UpdateThemeForStackResponse($result->toArray());
    }
}
