<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectAttachment;

trait CreateConnectAttachmentTrait
{
    /**
     * @param CreateConnectAttachmentRequest $args
     * @return CreateConnectAttachmentResponse
     */
    public function createConnectAttachment(CreateConnectAttachmentRequest $args)
    {
        $result = parent::createConnectAttachment($args->toArray());
        return new CreateConnectAttachmentResponse($result->toArray());
    }
}
