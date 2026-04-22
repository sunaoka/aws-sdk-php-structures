<?php

namespace Sunaoka\Aws\Structures\IVS\InsertAdBreak;

trait InsertAdBreakTrait
{
    /**
     * @param InsertAdBreakRequest $args
     * @return InsertAdBreakResponse
     */
    public function insertAdBreak(InsertAdBreakRequest $args)
    {
        $result = parent::insertAdBreak($args->toArray());
        return new InsertAdBreakResponse($result->toArray());
    }
}
