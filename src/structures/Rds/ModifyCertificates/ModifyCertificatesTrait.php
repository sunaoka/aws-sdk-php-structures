<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCertificates;

trait ModifyCertificatesTrait
{
    /**
     * @param ModifyCertificatesRequest $args
     * @return ModifyCertificatesResponse
     */
    public function modifyCertificates(ModifyCertificatesRequest $args)
    {
        $result = parent::modifyCertificates($args->toArray());
        return new ModifyCertificatesResponse($result->toArray());
    }
}
