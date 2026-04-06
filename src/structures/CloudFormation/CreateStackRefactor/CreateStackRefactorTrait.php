<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackRefactor;

trait CreateStackRefactorTrait
{
    /**
     * @param CreateStackRefactorRequest $args
     * @return CreateStackRefactorResponse
     */
    public function createStackRefactor(CreateStackRefactorRequest $args)
    {
        $result = parent::createStackRefactor($args->toArray());
        return new CreateStackRefactorResponse($result->toArray());
    }
}
