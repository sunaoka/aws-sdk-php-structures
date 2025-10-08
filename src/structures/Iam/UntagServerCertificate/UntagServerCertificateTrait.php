<?php

namespace Sunaoka\Aws\Structures\Iam\UntagServerCertificate;

trait UntagServerCertificateTrait
{
    /**
     * @param UntagServerCertificateRequest $args
     * @return void
     */
    public function untagServerCertificate(UntagServerCertificateRequest $args)
    {
        parent::untagServerCertificate($args->toArray());
    }
}
