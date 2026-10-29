<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelIndexRebuild;

trait CancelIndexRebuildTrait
{
    /**
     * @param CancelIndexRebuildRequest $args
     * @return CancelIndexRebuildResponse
     */
    public function cancelIndexRebuild(CancelIndexRebuildRequest $args)
    {
        $result = parent::cancelIndexRebuild($args->toArray());
        return new CancelIndexRebuildResponse($result->toArray());
    }
}
