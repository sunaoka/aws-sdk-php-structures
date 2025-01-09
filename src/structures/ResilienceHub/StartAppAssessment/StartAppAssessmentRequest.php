<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartAppAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property string $assessmentName
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class StartAppAssessmentRequest extends Request
{
    /**
     * @param array{
     *     appArn: string,
     *     appVersion: string,
     *     assessmentName: string,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
