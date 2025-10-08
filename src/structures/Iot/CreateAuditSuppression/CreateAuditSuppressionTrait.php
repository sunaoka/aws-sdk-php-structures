<?php

namespace Sunaoka\Aws\Structures\Iot\CreateAuditSuppression;

trait CreateAuditSuppressionTrait
{
    /**
     * @param CreateAuditSuppressionRequest $args
     * @return CreateAuditSuppressionResponse
     */
    public function createAuditSuppression(CreateAuditSuppressionRequest $args)
    {
        $result = parent::createAuditSuppression($args->toArray());
        return new CreateAuditSuppressionResponse($result->toArray());
    }
}
