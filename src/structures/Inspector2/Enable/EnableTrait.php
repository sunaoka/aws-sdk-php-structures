<?php

namespace Sunaoka\Aws\Structures\Inspector2\Enable;

trait EnableTrait
{
    /**
     * @param EnableRequest $args
     * @return EnableResponse
     */
    public function enable(EnableRequest $args)
    {
        $result = parent::enable($args->toArray());
        return new EnableResponse($result->toArray());
    }
}
