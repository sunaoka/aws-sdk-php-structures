<?php

namespace Sunaoka\Aws\Structures\Macie2\PutClassificationExportConfiguration;

trait PutClassificationExportConfigurationTrait
{
    /**
     * @param PutClassificationExportConfigurationRequest $args
     * @return PutClassificationExportConfigurationResponse
     */
    public function putClassificationExportConfiguration(PutClassificationExportConfigurationRequest $args)
    {
        $result = parent::putClassificationExportConfiguration($args->toArray());
        return new PutClassificationExportConfigurationResponse($result->toArray());
    }
}
