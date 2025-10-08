<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackRefactors;

trait ListStackRefactorsTrait
{
    /**
     * @param ListStackRefactorsRequest $args
     * @return ListStackRefactorsResponse
     */
    public function listStackRefactors(ListStackRefactorsRequest $args)
    {
        $result = parent::listStackRefactors($args->toArray());
        return new ListStackRefactorsResponse($result->toArray());
    }
}
