<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DeleteApplicationReferenceDataSource;

trait DeleteApplicationReferenceDataSourceTrait
{
    /**
     * @param DeleteApplicationReferenceDataSourceRequest $args
     * @return DeleteApplicationReferenceDataSourceResponse
     */
    public function deleteApplicationReferenceDataSource(DeleteApplicationReferenceDataSourceRequest $args)
    {
        $result = parent::deleteApplicationReferenceDataSource($args->toArray());
        return new DeleteApplicationReferenceDataSourceResponse($result->toArray());
    }
}
