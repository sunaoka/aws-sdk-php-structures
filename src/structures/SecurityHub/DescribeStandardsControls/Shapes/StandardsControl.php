<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeStandardsControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StandardsControlArn
 * @property 'ENABLED'|'DISABLED' $ControlStatus
 * @property string $DisabledReason
 * @property \Aws\Api\DateTimeResult $ControlStatusUpdatedAt
 * @property string $ControlId
 * @property string $Title
 * @property string $Description
 * @property string $RemediationUrl
 * @property 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL' $SeverityRating
 * @property list<string> $RelatedRequirements
 */
class StandardsControl extends Shape
{
    /**
     * @param array{
     *     StandardsControlArn?: string,
     *     ControlStatus?: 'ENABLED'|'DISABLED',
     *     DisabledReason?: string,
     *     ControlStatusUpdatedAt?: \Aws\Api\DateTimeResult,
     *     ControlId?: string,
     *     Title?: string,
     *     Description?: string,
     *     RemediationUrl?: string,
     *     SeverityRating?: 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL',
     *     RelatedRequirements?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
