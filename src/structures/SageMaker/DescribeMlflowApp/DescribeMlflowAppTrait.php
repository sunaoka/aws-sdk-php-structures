<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMlflowApp;

trait DescribeMlflowAppTrait
{
    /**
     * @param DescribeMlflowAppRequest $args
     * @return DescribeMlflowAppResponse
     */
    public function describeMlflowApp(DescribeMlflowAppRequest $args)
    {
        $result = parent::describeMlflowApp($args->toArray());
        return new DescribeMlflowAppResponse($result->toArray());
    }
}
