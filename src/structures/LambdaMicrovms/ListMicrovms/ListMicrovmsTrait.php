<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListMicrovms;

trait ListMicrovmsTrait
{
    /**
     * @param ListMicrovmsRequest $args
     * @return ListMicrovmsResponse
     */
    public function listMicrovms(ListMicrovmsRequest $args)
    {
        $result = parent::listMicrovms($args->toArray());
        return new ListMicrovmsResponse($result->toArray());
    }
}
