<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListAccelerators;

trait ListAcceleratorsTrait
{
    /**
     * @param ListAcceleratorsRequest $args
     * @return ListAcceleratorsResponse
     */
    public function listAccelerators(ListAcceleratorsRequest $args)
    {
        $result = parent::listAccelerators($args->toArray());
        return new ListAcceleratorsResponse($result->toArray());
    }
}
