<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferICD10CM;

trait InferICD10CMTrait
{
    /**
     * @param InferICD10CMRequest $args
     * @return InferICD10CMResponse
     */
    public function inferICD10CM(InferICD10CMRequest $args)
    {
        $result = parent::inferICD10CM($args->toArray());
        return new InferICD10CMResponse($result->toArray());
    }
}
