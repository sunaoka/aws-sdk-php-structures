<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureMetadata;

trait UpdateFeatureMetadataTrait
{
    /**
     * @param UpdateFeatureMetadataRequest $args
     * @return void
     */
    public function updateFeatureMetadata(UpdateFeatureMetadataRequest $args)
    {
        parent::updateFeatureMetadata($args->toArray());
    }
}
