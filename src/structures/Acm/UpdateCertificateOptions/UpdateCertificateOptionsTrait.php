<?php

namespace Sunaoka\Aws\Structures\Acm\UpdateCertificateOptions;

trait UpdateCertificateOptionsTrait
{
    /**
     * @param UpdateCertificateOptionsRequest $args
     * @return void
     */
    public function updateCertificateOptions(UpdateCertificateOptionsRequest $args)
    {
        parent::updateCertificateOptions($args->toArray());
    }
}
