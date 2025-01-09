<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentArn
 * @property string $clientToken
 */
class DeleteAppAssessmentRequest extends Request
{
    /**
     * @param array{
     *     assessmentArn: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
