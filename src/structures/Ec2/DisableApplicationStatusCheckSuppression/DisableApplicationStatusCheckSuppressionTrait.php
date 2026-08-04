<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableApplicationStatusCheckSuppression;

trait DisableApplicationStatusCheckSuppressionTrait
{
    /**
     * @param DisableApplicationStatusCheckSuppressionRequest $args
     * @return DisableApplicationStatusCheckSuppressionResponse
     */
    public function disableApplicationStatusCheckSuppression(DisableApplicationStatusCheckSuppressionRequest $args)
    {
        $result = parent::disableApplicationStatusCheckSuppression($args->toArray());
        return new DisableApplicationStatusCheckSuppressionResponse($result->toArray());
    }
}
