<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountVdmAttributes;

trait PutAccountVdmAttributesTrait
{
    /**
     * @param PutAccountVdmAttributesRequest $args
     * @return PutAccountVdmAttributesResponse
     */
    public function putAccountVdmAttributes(PutAccountVdmAttributesRequest $args)
    {
        $result = parent::putAccountVdmAttributes($args->toArray());
        return new PutAccountVdmAttributesResponse($result->toArray());
    }
}
