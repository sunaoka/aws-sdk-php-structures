<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchProperties;

trait DescribePatchPropertiesTrait
{
    /**
     * @param DescribePatchPropertiesRequest $args
     * @return DescribePatchPropertiesResponse
     */
    public function describePatchProperties(DescribePatchPropertiesRequest $args)
    {
        $result = parent::describePatchProperties($args->toArray());
        return new DescribePatchPropertiesResponse($result->toArray());
    }
}
