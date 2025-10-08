<?php

namespace Sunaoka\Aws\Structures\Emr\ListStudios;

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
