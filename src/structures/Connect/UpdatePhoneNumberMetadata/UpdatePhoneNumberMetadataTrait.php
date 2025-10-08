<?php

namespace Sunaoka\Aws\Structures\Connect\UpdatePhoneNumberMetadata;

trait UpdatePhoneNumberMetadataTrait
{
    /**
     * @param UpdatePhoneNumberMetadataRequest $args
     * @return void
     */
    public function updatePhoneNumberMetadata(UpdatePhoneNumberMetadataRequest $args)
    {
        parent::updatePhoneNumberMetadata($args->toArray());
    }
}
