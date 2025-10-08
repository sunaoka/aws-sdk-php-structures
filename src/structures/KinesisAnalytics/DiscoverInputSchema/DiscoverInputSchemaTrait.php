<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DiscoverInputSchema;

trait DiscoverInputSchemaTrait
{
    /**
     * @param DiscoverInputSchemaRequest $args
     * @return DiscoverInputSchemaResponse
     */
    public function discoverInputSchema(DiscoverInputSchemaRequest $args)
    {
        $result = parent::discoverInputSchema($args->toArray());
        return new DiscoverInputSchemaResponse($result->toArray());
    }
}
