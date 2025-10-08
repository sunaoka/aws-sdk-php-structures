<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListStreamProcessors;

trait ListStreamProcessorsTrait
{
    /**
     * @param ListStreamProcessorsRequest $args
     * @return ListStreamProcessorsResponse
     */
    public function listStreamProcessors(ListStreamProcessorsRequest $args)
    {
        $result = parent::listStreamProcessors($args->toArray());
        return new ListStreamProcessorsResponse($result->toArray());
    }
}
