<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeStandardsControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StandardsControlArn
 * @property 'ENABLED'|'DISABLED'|null $ControlStatus
 * @property string|null $DisabledReason
 * @property \Aws\Api\DateTimeResult|null $ControlStatusUpdatedAt
 * @property string|null $ControlId
 * @property string|null $Title
 * @property string|null $Description
 * @property string|null $RemediationUrl
 * @property 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $SeverityRating
 * @property list<string>|null $RelatedRequirements
 */
class StandardsControl extends Shape
{
    /**
     * @param array{
     *     StandardsControlArn?: string|null,
     *     ControlStatus?: 'ENABLED'|'DISABLED'|null,
     *     DisabledReason?: string|null,
     *     ControlStatusUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     ControlId?: string|null,
     *     Title?: string|null,
     *     Description?: string|null,
     *     RemediationUrl?: string|null,
     *     SeverityRating?: 'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     RelatedRequirements?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
