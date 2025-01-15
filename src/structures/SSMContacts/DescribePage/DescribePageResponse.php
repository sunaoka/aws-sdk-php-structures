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
 * @property string|null $PublicSubject
 * @property string|null $PublicContent
 * @property string|null $IncidentId
 * @property \Aws\Api\DateTimeResult|null $SentTime
 * @property \Aws\Api\DateTimeResult|null $ReadTime
 * @property \Aws\Api\DateTimeResult|null $DeliveryTime
 */
class DescribePageResponse extends Response
{
}
