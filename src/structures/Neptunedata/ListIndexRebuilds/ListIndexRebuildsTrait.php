<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListIndexRebuilds;

trait ListIndexRebuildsTrait
{
    /**
     * @return ListIndexRebuildsResponse
     */
    public function listIndexRebuilds()
    {
        $result = parent::listIndexRebuilds();
        return new ListIndexRebuildsResponse($result->toArray());
    }
}
