<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers;

trait ListDocumentClassifiersTrait
{
    /**
     * @param ListDocumentClassifiersRequest $args
     * @return ListDocumentClassifiersResponse
     */
    public function listDocumentClassifiers(ListDocumentClassifiersRequest $args)
    {
        $result = parent::listDocumentClassifiers($args->toArray());
        return new ListDocumentClassifiersResponse($result->toArray());
    }
}
