<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetIndex;

trait GetIndexTrait
{
    /**
     * @return GetIndexResponse
     */
    public function getIndex()
    {
        $result = parent::getIndex();
        return new GetIndexResponse($result->toArray());
    }
}
