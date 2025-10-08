<?php

namespace Sunaoka\Aws\Structures\Inspector2\Disable;

trait DisableTrait
{
    /**
     * @param DisableRequest $args
     * @return DisableResponse
     */
    public function disable(DisableRequest $args)
    {
        $result = parent::disable($args->toArray());
        return new DisableResponse($result->toArray());
    }
}
