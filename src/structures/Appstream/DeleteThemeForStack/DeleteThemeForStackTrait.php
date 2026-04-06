<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteThemeForStack;

trait DeleteThemeForStackTrait
{
    /**
     * @param DeleteThemeForStackRequest $args
     * @return DeleteThemeForStackResponse
     */
    public function deleteThemeForStack(DeleteThemeForStackRequest $args)
    {
        $result = parent::deleteThemeForStack($args->toArray());
        return new DeleteThemeForStackResponse($result->toArray());
    }
}
