<?php

namespace Sunaoka\Aws\Structures\S3\UpdateBucketMetadataJournalTableConfiguration;

trait UpdateBucketMetadataJournalTableConfigurationTrait
{
    /**
     * @param UpdateBucketMetadataJournalTableConfigurationRequest $args
     * @return void
     */
    public function updateBucketMetadataJournalTableConfiguration(
        UpdateBucketMetadataJournalTableConfigurationRequest $args,
    ) {
        parent::updateBucketMetadataJournalTableConfiguration($args->toArray());
    }
}
