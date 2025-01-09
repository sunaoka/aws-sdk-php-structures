<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DescribeEngagement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ContactArn
 * @property string $EngagementArn
 * @property string $Sender
 * @property string $Subject
 * @property string $Content
 * @property string $PublicSubject
 * @property string $PublicContent
 * @property string $IncidentId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $StopTime
 */
class DescribeEngagementResponse extends Response
{
}
