<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT;

trait InferSNOMEDCTTrait
{
    /**
     * @param InferSNOMEDCTRequest $args
     * @return InferSNOMEDCTResponse
     */
    public function inferSNOMEDCT(InferSNOMEDCTRequest $args)
    {
        $result = parent::inferSNOMEDCT($args->toArray());
        return new InferSNOMEDCTResponse($result->toArray());
    }
}
