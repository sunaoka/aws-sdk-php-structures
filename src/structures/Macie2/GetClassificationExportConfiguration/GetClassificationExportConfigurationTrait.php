<?php

namespace Sunaoka\Aws\Structures\Macie2\GetClassificationExportConfiguration;

trait GetClassificationExportConfigurationTrait
{
    /**
     * @param GetClassificationExportConfigurationRequest $args
     * @return GetClassificationExportConfigurationResponse
     */
    public function getClassificationExportConfiguration(GetClassificationExportConfigurationRequest $args)
    {
        $result = parent::getClassificationExportConfiguration($args->toArray());
        return new GetClassificationExportConfigurationResponse($result->toArray());
    }
}
