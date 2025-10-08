<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxLustre;

trait CreateLocationFsxLustreTrait
{
    /**
     * @param CreateLocationFsxLustreRequest $args
     * @return CreateLocationFsxLustreResponse
     */
    public function createLocationFsxLustre(CreateLocationFsxLustreRequest $args)
    {
        $result = parent::createLocationFsxLustre($args->toArray());
        return new CreateLocationFsxLustreResponse($result->toArray());
    }
}
