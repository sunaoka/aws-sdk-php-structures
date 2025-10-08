<?php

namespace Sunaoka\Aws\Structures\Acm\ListTagsForCertificate;

trait ListTagsForCertificateTrait
{
    /**
     * @param ListTagsForCertificateRequest $args
     * @return ListTagsForCertificateResponse
     */
    public function listTagsForCertificate(ListTagsForCertificateRequest $args)
    {
        $result = parent::listTagsForCertificate($args->toArray());
        return new ListTagsForCertificateResponse($result->toArray());
    }
}
