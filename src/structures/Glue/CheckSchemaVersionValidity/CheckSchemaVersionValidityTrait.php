<?php

namespace Sunaoka\Aws\Structures\Glue\CheckSchemaVersionValidity;

trait CheckSchemaVersionValidityTrait
{
    /**
     * @param CheckSchemaVersionValidityRequest $args
     * @return CheckSchemaVersionValidityResponse
     */
    public function checkSchemaVersionValidity(CheckSchemaVersionValidityRequest $args)
    {
        $result = parent::checkSchemaVersionValidity($args->toArray());
        return new CheckSchemaVersionValidityResponse($result->toArray());
    }
}
