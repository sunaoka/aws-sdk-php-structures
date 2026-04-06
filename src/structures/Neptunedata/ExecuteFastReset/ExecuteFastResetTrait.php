<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteFastReset;

trait ExecuteFastResetTrait
{
    /**
     * @param ExecuteFastResetRequest $args
     * @return ExecuteFastResetResponse
     */
    public function executeFastReset(ExecuteFastResetRequest $args)
    {
        $result = parent::executeFastReset($args->toArray());
        return new ExecuteFastResetResponse($result->toArray());
    }
}
