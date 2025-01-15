<?php

namespace Sunaoka\Aws\Structures\Inspector\CreateAssessmentTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentTargetName
 * @property string|null $resourceGroupArn
 */
class CreateAssessmentTargetRequest extends Request
{
    /**
     * @param array{
     *     assessmentTargetName: string,
     *     resourceGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
