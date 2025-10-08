<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSdiSource;

trait DescribeSdiSourceTrait
{
    /**
     * @param DescribeSdiSourceRequest $args
     * @return DescribeSdiSourceResponse
     */
    public function describeSdiSource(DescribeSdiSourceRequest $args)
    {
        $result = parent::describeSdiSource($args->toArray());
        return new DescribeSdiSourceResponse($result->toArray());
    }
}
