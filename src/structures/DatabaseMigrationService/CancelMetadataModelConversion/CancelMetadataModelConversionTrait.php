<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CancelMetadataModelConversion;

trait CancelMetadataModelConversionTrait
{
    /**
     * @param CancelMetadataModelConversionRequest $args
     * @return CancelMetadataModelConversionResponse
     */
    public function cancelMetadataModelConversion(CancelMetadataModelConversionRequest $args)
    {
        $result = parent::cancelMetadataModelConversion($args->toArray());
        return new CancelMetadataModelConversionResponse($result->toArray());
    }
}
