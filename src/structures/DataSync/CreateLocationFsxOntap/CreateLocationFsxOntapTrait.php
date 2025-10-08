<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOntap;

trait CreateLocationFsxOntapTrait
{
    /**
     * @param CreateLocationFsxOntapRequest $args
     * @return CreateLocationFsxOntapResponse
     */
    public function createLocationFsxOntap(CreateLocationFsxOntapRequest $args)
    {
        $result = parent::createLocationFsxOntap($args->toArray());
        return new CreateLocationFsxOntapResponse($result->toArray());
    }
}
