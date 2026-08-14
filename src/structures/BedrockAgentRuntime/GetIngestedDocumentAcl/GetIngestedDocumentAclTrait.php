<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetIngestedDocumentAcl;

trait GetIngestedDocumentAclTrait
{
    /**
     * @param GetIngestedDocumentAclRequest $args
     * @return GetIngestedDocumentAclResponse
     */
    public function getIngestedDocumentAcl(GetIngestedDocumentAclRequest $args)
    {
        $result = parent::getIngestedDocumentAcl($args->toArray());
        return new GetIngestedDocumentAclResponse($result->toArray());
    }
}
