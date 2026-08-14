<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\CheckIngestedDocumentAcl;

trait CheckIngestedDocumentAclTrait
{
    /**
     * @param CheckIngestedDocumentAclRequest $args
     * @return CheckIngestedDocumentAclResponse
     */
    public function checkIngestedDocumentAcl(CheckIngestedDocumentAclRequest $args)
    {
        $result = parent::checkIngestedDocumentAcl($args->toArray());
        return new CheckIngestedDocumentAclResponse($result->toArray());
    }
}
