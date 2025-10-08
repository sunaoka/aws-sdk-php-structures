<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribePlatformVersion;

trait DescribePlatformVersionTrait
{
    /**
     * @param DescribePlatformVersionRequest $args
     * @return DescribePlatformVersionResponse
     */
    public function describePlatformVersion(DescribePlatformVersionRequest $args)
    {
        $result = parent::describePlatformVersion($args->toArray());
        return new DescribePlatformVersionResponse($result->toArray());
    }
}
