<?php

namespace Sunaoka\Aws\Structures\Inspector\UpdateAssessmentTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTargetArn
 * @property string $assessmentTargetName
 * @property string|null $resourceGroupArn
 */
class UpdateAssessmentTargetRequest extends Request
{
    /**
     * @param array{
     *     assessmentTargetArn: string,
     *     assessmentTargetName: string,
     *     resourceGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
