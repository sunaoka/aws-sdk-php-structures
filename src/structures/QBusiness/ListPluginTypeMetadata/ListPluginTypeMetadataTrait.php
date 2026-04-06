<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPluginTypeMetadata;

trait ListPluginTypeMetadataTrait
{
    /**
     * @param ListPluginTypeMetadataRequest $args
     * @return ListPluginTypeMetadataResponse
     */
    public function listPluginTypeMetadata(ListPluginTypeMetadataRequest $args)
    {
        $result = parent::listPluginTypeMetadata($args->toArray());
        return new ListPluginTypeMetadataResponse($result->toArray());
    }
}
