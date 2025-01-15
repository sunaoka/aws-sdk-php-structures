<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DescribeEngagement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ContactArn
 * @property string $EngagementArn
 * @property string $Sender
 * @property string $Subject
 * @property string $Content
 * @property string|null $PublicSubject
 * @property string|null $PublicContent
 * @property string|null $IncidentId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $StopTime
 */
class DescribeEngagementResponse extends Response
{
}
