<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelPackages;

trait ListModelPackagesTrait
{
    /**
     * @param ListModelPackagesRequest $args
     * @return ListModelPackagesResponse
     */
    public function listModelPackages(ListModelPackagesRequest $args)
    {
        $result = parent::listModelPackages($args->toArray());
        return new ListModelPackagesResponse($result->toArray());
    }
}
