<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationReferenceDataSource;

trait AddApplicationReferenceDataSourceTrait
{
    /**
     * @param AddApplicationReferenceDataSourceRequest $args
     * @return AddApplicationReferenceDataSourceResponse
     */
    public function addApplicationReferenceDataSource(AddApplicationReferenceDataSourceRequest $args)
    {
        $result = parent::addApplicationReferenceDataSource($args->toArray());
        return new AddApplicationReferenceDataSourceResponse($result->toArray());
    }
}
