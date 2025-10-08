<?php

namespace Sunaoka\Aws\Structures\Acm\RemoveTagsFromCertificate;

trait RemoveTagsFromCertificateTrait
{
    /**
     * @param RemoveTagsFromCertificateRequest $args
     * @return void
     */
    public function removeTagsFromCertificate(RemoveTagsFromCertificateRequest $args)
    {
        parent::removeTagsFromCertificate($args->toArray());
    }
}
