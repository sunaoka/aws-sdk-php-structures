<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetSuppressionOptions;

trait PutConfigurationSetSuppressionOptionsTrait
{
    /**
     * @param PutConfigurationSetSuppressionOptionsRequest $args
     * @return PutConfigurationSetSuppressionOptionsResponse
     */
    public function putConfigurationSetSuppressionOptions(PutConfigurationSetSuppressionOptionsRequest $args)
    {
        $result = parent::putConfigurationSetSuppressionOptions($args->toArray());
        return new PutConfigurationSetSuppressionOptionsResponse($result->toArray());
    }
}
