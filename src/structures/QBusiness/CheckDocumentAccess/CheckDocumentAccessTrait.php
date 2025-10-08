<?php

namespace Sunaoka\Aws\Structures\QBusiness\CheckDocumentAccess;

trait CheckDocumentAccessTrait
{
    /**
     * @param CheckDocumentAccessRequest $args
     * @return CheckDocumentAccessResponse
     */
    public function checkDocumentAccess(CheckDocumentAccessRequest $args)
    {
        $result = parent::checkDocumentAccess($args->toArray());
        return new CheckDocumentAccessResponse($result->toArray());
    }
}
