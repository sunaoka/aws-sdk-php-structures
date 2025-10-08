<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetLayout;

trait GetLayoutTrait
{
    /**
     * @param GetLayoutRequest $args
     * @return GetLayoutResponse
     */
    public function getLayout(GetLayoutRequest $args)
    {
        $result = parent::getLayout($args->toArray());
        return new GetLayoutResponse($result->toArray());
    }
}
