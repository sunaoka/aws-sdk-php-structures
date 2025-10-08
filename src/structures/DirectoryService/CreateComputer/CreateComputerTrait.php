<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateComputer;

trait CreateComputerTrait
{
    /**
     * @param CreateComputerRequest $args
     * @return CreateComputerResponse
     */
    public function createComputer(CreateComputerRequest $args)
    {
        $result = parent::createComputer($args->toArray());
        return new CreateComputerResponse($result->toArray());
    }
}
