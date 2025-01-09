<?php

namespace Sunaoka\Aws\Structures\Inspector\CreateAssessmentTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTargetName
 * @property string $resourceGroupArn
 */
class CreateAssessmentTargetRequest extends Request
{
    /**
     * @param array{
     *     assessmentTargetName: string,
     *     resourceGroupArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
