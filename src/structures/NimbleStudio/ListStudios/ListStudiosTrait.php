<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStudios;

trait ListStudiosTrait
{
    /**
     * @param ListStudiosRequest $args
     * @return ListStudiosResponse
     */
    public function listStudios(ListStudiosRequest $args)
    {
        $result = parent::listStudios($args->toArray());
        return new ListStudiosResponse($result->toArray());
    }
}
