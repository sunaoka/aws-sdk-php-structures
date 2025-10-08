<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeLiveSource;

trait DescribeLiveSourceTrait
{
    /**
     * @param DescribeLiveSourceRequest $args
     * @return DescribeLiveSourceResponse
     */
    public function describeLiveSource(DescribeLiveSourceRequest $args)
    {
        $result = parent::describeLiveSource($args->toArray());
        return new DescribeLiveSourceResponse($result->toArray());
    }
}
