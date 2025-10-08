<?php

namespace Sunaoka\Aws\Structures\Iam\ListServerCertificateTags;

trait ListServerCertificateTagsTrait
{
    /**
     * @param ListServerCertificateTagsRequest $args
     * @return ListServerCertificateTagsResponse
     */
    public function listServerCertificateTags(ListServerCertificateTagsRequest $args)
    {
        $result = parent::listServerCertificateTags($args->toArray());
        return new ListServerCertificateTagsResponse($result->toArray());
    }
}
