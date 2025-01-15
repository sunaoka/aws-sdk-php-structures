<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateOpsItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string|null $OpsItemType
 * @property array<string, Shapes\OpsItemDataValue>|null $OperationalData
 * @property list<Shapes\OpsItemNotification>|null $Notifications
 * @property int<1, 5>|null $Priority
 * @property list<Shapes\RelatedOpsItem>|null $RelatedOpsItems
 * @property string $Source
 * @property string $Title
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $Category
 * @property string|null $Severity
 * @property \Aws\Api\DateTimeResult|null $ActualStartTime
 * @property \Aws\Api\DateTimeResult|null $ActualEndTime
 * @property \Aws\Api\DateTimeResult|null $PlannedStartTime
 * @property \Aws\Api\DateTimeResult|null $PlannedEndTime
 * @property string|null $AccountId
 */
class CreateOpsItemRequest extends Request
{
    /**
     * @param array{
     *     Description: string,
     *     OpsItemType?: string|null,
     *     OperationalData?: array<string, Shapes\OpsItemDataValue>|null,
     *     Notifications?: list<Shapes\OpsItemNotification>|null,
     *     Priority?: int<1, 5>|null,
     *     RelatedOpsItems?: list<Shapes\RelatedOpsItem>|null,
     *     Source: string,
     *     Title: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     Category?: string|null,
     *     Severity?: string|null,
     *     ActualStartTime?: \Aws\Api\DateTimeResult|null,
     *     ActualEndTime?: \Aws\Api\DateTimeResult|null,
     *     PlannedStartTime?: \Aws\Api\DateTimeResult|null,
     *     PlannedEndTime?: \Aws\Api\DateTimeResult|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
