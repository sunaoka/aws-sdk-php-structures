<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListDirectories;

trait ListDirectoriesTrait
{
    /**
     * @param ListDirectoriesRequest $args
     * @return ListDirectoriesResponse
     */
    public function listDirectories(ListDirectoriesRequest $args)
    {
        $result = parent::listDirectories($args->toArray());
        return new ListDirectoriesResponse($result->toArray());
    }
}
