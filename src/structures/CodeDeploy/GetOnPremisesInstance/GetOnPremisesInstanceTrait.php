<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetOnPremisesInstance;

trait GetOnPremisesInstanceTrait
{
    /**
     * @param GetOnPremisesInstanceRequest $args
     * @return GetOnPremisesInstanceResponse
     */
    public function getOnPremisesInstance(GetOnPremisesInstanceRequest $args)
    {
        $result = parent::getOnPremisesInstance($args->toArray());
        return new GetOnPremisesInstanceResponse($result->toArray());
    }
}
