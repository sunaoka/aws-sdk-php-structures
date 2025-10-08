<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateLayout;

trait CreateLayoutTrait
{
    /**
     * @param CreateLayoutRequest $args
     * @return CreateLayoutResponse
     */
    public function createLayout(CreateLayoutRequest $args)
    {
        $result = parent::createLayout($args->toArray());
        return new CreateLayoutResponse($result->toArray());
    }
}
