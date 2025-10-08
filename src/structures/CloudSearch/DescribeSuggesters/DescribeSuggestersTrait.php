<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeSuggesters;

trait DescribeSuggestersTrait
{
    /**
     * @param DescribeSuggestersRequest $args
     * @return DescribeSuggestersResponse
     */
    public function describeSuggesters(DescribeSuggestersRequest $args)
    {
        $result = parent::describeSuggesters($args->toArray());
        return new DescribeSuggestersResponse($result->toArray());
    }
}
