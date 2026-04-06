<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet;

trait CreateFleetTrait
{
    /**
     * @param CreateFleetRequest $args
     * @return CreateFleetResponse
     */
    public function createFleet(CreateFleetRequest $args)
    {
        $result = parent::createFleet($args->toArray());
        return new CreateFleetResponse($result->toArray());
    }
}
