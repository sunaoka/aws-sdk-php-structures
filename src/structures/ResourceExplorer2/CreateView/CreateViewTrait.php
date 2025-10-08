<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateView;

trait CreateViewTrait
{
    /**
     * @param CreateViewRequest $args
     * @return CreateViewResponse
     */
    public function createView(CreateViewRequest $args)
    {
        $result = parent::createView($args->toArray());
        return new CreateViewResponse($result->toArray());
    }
}
