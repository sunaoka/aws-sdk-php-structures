<?php

namespace Sunaoka\Aws\Structures\Glue\GetClassifiers;

trait GetClassifiersTrait
{
    /**
     * @param GetClassifiersRequest $args
     * @return GetClassifiersResponse
     */
    public function getClassifiers(GetClassifiersRequest $args)
    {
        $result = parent::getClassifiers($args->toArray());
        return new GetClassifiersResponse($result->toArray());
    }
}
