<?php

namespace Sunaoka\Aws\Structures\Emr\DescribePersistentAppUI;

trait DescribePersistentAppUITrait
{
    /**
     * @param DescribePersistentAppUIRequest $args
     * @return DescribePersistentAppUIResponse
     */
    public function describePersistentAppUI(DescribePersistentAppUIRequest $args)
    {
        $result = parent::describePersistentAppUI($args->toArray());
        return new DescribePersistentAppUIResponse($result->toArray());
    }
}
