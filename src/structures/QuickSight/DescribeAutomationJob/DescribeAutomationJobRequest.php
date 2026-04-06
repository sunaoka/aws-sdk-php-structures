<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAutomationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AutomationGroupId
 * @property string $AutomationId
 * @property bool|null $IncludeInputPayload
 * @property bool|null $IncludeOutputPayload
 * @property string $JobId
 */
class DescribeAutomationJobRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AutomationGroupId: string,
     *     AutomationId: string,
     *     IncludeInputPayload?: bool|null,
     *     IncludeOutputPayload?: bool|null,
     *     JobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
