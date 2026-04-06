<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartPolicyPreviewJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PolicyConfiguration> $policyConfigurations
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string $outputS3Uri
 * @property string|null $clientToken
 */
class StartPolicyPreviewJobRequest extends Request
{
    /**
     * @param array{
     *     policyConfigurations: list<Shapes\PolicyConfiguration>,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     outputS3Uri: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
