<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConformancePack;

trait PutConformancePackTrait
{
    /**
     * @param PutConformancePackRequest $args
     * @return PutConformancePackResponse
     */
    public function putConformancePack(PutConformancePackRequest $args)
    {
        $result = parent::putConformancePack($args->toArray());
        return new PutConformancePackResponse($result->toArray());
    }
}
