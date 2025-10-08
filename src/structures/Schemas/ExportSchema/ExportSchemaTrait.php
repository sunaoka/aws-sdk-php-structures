<?php

namespace Sunaoka\Aws\Structures\Schemas\ExportSchema;

trait ExportSchemaTrait
{
    /**
     * @param ExportSchemaRequest $args
     * @return ExportSchemaResponse
     */
    public function exportSchema(ExportSchemaRequest $args)
    {
        $result = parent::exportSchema($args->toArray());
        return new ExportSchemaResponse($result->toArray());
    }
}
