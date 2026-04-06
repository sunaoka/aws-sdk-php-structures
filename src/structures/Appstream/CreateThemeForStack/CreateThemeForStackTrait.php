<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateThemeForStack;

trait CreateThemeForStackTrait
{
    /**
     * @param CreateThemeForStackRequest $args
     * @return CreateThemeForStackResponse
     */
    public function createThemeForStack(CreateThemeForStackRequest $args)
    {
        $result = parent::createThemeForStack($args->toArray());
        return new CreateThemeForStackResponse($result->toArray());
    }
}
