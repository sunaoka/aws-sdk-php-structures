<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableApplicationStatusCheckSuppression;

trait EnableApplicationStatusCheckSuppressionTrait
{
    /**
     * @param EnableApplicationStatusCheckSuppressionRequest $args
     * @return EnableApplicationStatusCheckSuppressionResponse
     */
    public function enableApplicationStatusCheckSuppression(EnableApplicationStatusCheckSuppressionRequest $args)
    {
        $result = parent::enableApplicationStatusCheckSuppression($args->toArray());
        return new EnableApplicationStatusCheckSuppressionResponse($result->toArray());
    }
}
