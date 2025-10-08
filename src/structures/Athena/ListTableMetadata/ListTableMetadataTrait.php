<?php

namespace Sunaoka\Aws\Structures\Athena\ListTableMetadata;

trait ListTableMetadataTrait
{
    /**
     * @param ListTableMetadataRequest $args
     * @return ListTableMetadataResponse
     */
    public function listTableMetadata(ListTableMetadataRequest $args)
    {
        $result = parent::listTableMetadata($args->toArray());
        return new ListTableMetadataResponse($result->toArray());
    }
}
