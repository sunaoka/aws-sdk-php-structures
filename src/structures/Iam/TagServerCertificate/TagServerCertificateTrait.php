<?php

namespace Sunaoka\Aws\Structures\Iam\TagServerCertificate;

trait TagServerCertificateTrait
{
    /**
     * @param TagServerCertificateRequest $args
     * @return void
     */
    public function tagServerCertificate(TagServerCertificateRequest $args)
    {
        parent::tagServerCertificate($args->toArray());
    }
}
