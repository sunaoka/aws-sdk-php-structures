<?php

namespace Sunaoka\Aws\Structures\Redshift\CancelResize;

trait CancelResizeTrait
{
    /**
     * @param CancelResizeRequest $args
     * @return CancelResizeResponse
     */
    public function cancelResize(CancelResizeRequest $args)
    {
        $result = parent::cancelResize($args->toArray());
        return new CancelResizeResponse($result->toArray());
    }
}
