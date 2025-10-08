<?php

namespace Sunaoka\Aws\Structures\Acm\AddTagsToCertificate;

trait AddTagsToCertificateTrait
{
    /**
     * @param AddTagsToCertificateRequest $args
     * @return void
     */
    public function addTagsToCertificate(AddTagsToCertificateRequest $args)
    {
        parent::addTagsToCertificate($args->toArray());
    }
}
