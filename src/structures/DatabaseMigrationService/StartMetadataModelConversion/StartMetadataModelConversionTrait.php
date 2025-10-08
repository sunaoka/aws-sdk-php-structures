<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartMetadataModelConversion;

trait StartMetadataModelConversionTrait
{
    /**
     * @param StartMetadataModelConversionRequest $args
     * @return StartMetadataModelConversionResponse
     */
    public function startMetadataModelConversion(StartMetadataModelConversionRequest $args)
    {
        $result = parent::startMetadataModelConversion($args->toArray());
        return new StartMetadataModelConversionResponse($result->toArray());
    }
}
