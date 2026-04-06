<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEmailAddressMetadata;

trait UpdateEmailAddressMetadataTrait
{
    /**
     * @param UpdateEmailAddressMetadataRequest $args
     * @return UpdateEmailAddressMetadataResponse
     */
    public function updateEmailAddressMetadata(UpdateEmailAddressMetadataRequest $args)
    {
        $result = parent::updateEmailAddressMetadata($args->toArray());
        return new UpdateEmailAddressMetadataResponse($result->toArray());
    }
}
