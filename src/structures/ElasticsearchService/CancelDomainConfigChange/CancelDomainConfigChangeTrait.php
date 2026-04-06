<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CancelDomainConfigChange;

trait CancelDomainConfigChangeTrait
{
    /**
     * @param CancelDomainConfigChangeRequest $args
     * @return CancelDomainConfigChangeResponse
     */
    public function cancelDomainConfigChange(CancelDomainConfigChangeRequest $args)
    {
        $result = parent::cancelDomainConfigChange($args->toArray());
        return new CancelDomainConfigChangeResponse($result->toArray());
    }
}
