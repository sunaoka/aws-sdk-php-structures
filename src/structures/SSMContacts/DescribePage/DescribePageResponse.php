<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DescribePage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PageArn
 * @property string $EngagementArn
 * @property string $ContactArn
 * @property string $Sender
 * @property string $Subject
 * @property string $Content
 * @property string $PublicSubject
 * @property string $PublicContent
 * @property string $IncidentId
 * @property \Aws\Api\DateTimeResult $SentTime
 * @property \Aws\Api\DateTimeResult $ReadTime
 * @property \Aws\Api\DateTimeResult $DeliveryTime
 */
class DescribePageResponse extends Response
{
}
