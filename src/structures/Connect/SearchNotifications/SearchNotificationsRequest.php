<?php

namespace Sunaoka\Aws\Structures\Connect\SearchNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\NotificationSearchFilter|null $SearchFilter
 * @property Shapes\NotificationSearchCriteria|null $SearchCriteria
 */
class SearchNotificationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SearchFilter?: Shapes\NotificationSearchFilter|null,
     *     SearchCriteria?: Shapes\NotificationSearchCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
