<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\SwapEnvironmentCNAMEs;

trait SwapEnvironmentCNAMEsTrait
{
    /**
     * @param SwapEnvironmentCNAMEsRequest $args
     * @return void
     */
    public function swapEnvironmentCNAMEs(SwapEnvironmentCNAMEsRequest $args)
    {
        parent::swapEnvironmentCNAMEs($args->toArray());
    }
}
