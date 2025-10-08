<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetDefaultView;

trait GetDefaultViewTrait
{
    /**
     * @return GetDefaultViewResponse
     */
    public function getDefaultView()
    {
        $result = parent::getDefaultView();
        return new GetDefaultViewResponse($result->toArray());
    }
}
