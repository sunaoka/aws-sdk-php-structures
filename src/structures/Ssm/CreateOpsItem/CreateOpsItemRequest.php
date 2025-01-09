<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateOpsItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $OpsItemType
 * @property array<string, Shapes\OpsItemDataValue> $OperationalData
 * @property list<Shapes\OpsItemNotification> $Notifications
 * @property int $Priority
 * @property list<Shapes\RelatedOpsItem> $RelatedOpsItems
 * @property string $Source
 * @property string $Title
 * @property list<Shapes\Tag> $Tags
 * @property string $Category
 * @property string $Severity
 * @property \Aws\Api\DateTimeResult $ActualStartTime
 * @property \Aws\Api\DateTimeResult $ActualEndTime
 * @property \Aws\Api\DateTimeResult $PlannedStartTime
 * @property \Aws\Api\DateTimeResult $PlannedEndTime
 * @property string $AccountId
 */
class CreateOpsItemRequest extends Request
{
    /**
     * @param array{
     *     Description: string,
     *     OpsItemType?: string,
     *     OperationalData?: array<string, Shapes\OpsItemDataValue>,
     *     Notifications?: list<Shapes\OpsItemNotification>,
     *     Priority?: int,
     *     RelatedOpsItems?: list<Shapes\RelatedOpsItem>,
     *     Source: string,
     *     Title: string,
     *     Tags?: list<Shapes\Tag>,
     *     Category?: string,
     *     Severity?: string,
     *     ActualStartTime?: \Aws\Api\DateTimeResult,
     *     ActualEndTime?: \Aws\Api\DateTimeResult,
     *     PlannedStartTime?: \Aws\Api\DateTimeResult,
     *     PlannedEndTime?: \Aws\Api\DateTimeResult,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
