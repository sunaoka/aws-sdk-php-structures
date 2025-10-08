<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDomainControllers;

trait DescribeDomainControllersTrait
{
    /**
     * @param DescribeDomainControllersRequest $args
     * @return DescribeDomainControllersResponse
     */
    public function describeDomainControllers(DescribeDomainControllersRequest $args)
    {
        $result = parent::describeDomainControllers($args->toArray());
        return new DescribeDomainControllersResponse($result->toArray());
    }
}
