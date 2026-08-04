<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateApplicationStatusCheck;

trait CreateApplicationStatusCheckTrait
{
    /**
     * @param CreateApplicationStatusCheckRequest $args
     * @return CreateApplicationStatusCheckResponse
     */
    public function createApplicationStatusCheck(CreateApplicationStatusCheckRequest $args)
    {
        $result = parent::createApplicationStatusCheck($args->toArray());
        return new CreateApplicationStatusCheckResponse($result->toArray());
    }
}
