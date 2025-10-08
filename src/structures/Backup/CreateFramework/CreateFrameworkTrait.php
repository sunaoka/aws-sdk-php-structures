<?php

namespace Sunaoka\Aws\Structures\Backup\CreateFramework;

trait CreateFrameworkTrait
{
    /**
     * @param CreateFrameworkRequest $args
     * @return CreateFrameworkResponse
     */
    public function createFramework(CreateFrameworkRequest $args)
    {
        $result = parent::createFramework($args->toArray());
        return new CreateFrameworkResponse($result->toArray());
    }
}
