<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $MessageId
 * @property string $FromEmailAddress
 * @property string $Subject
 * @property list<Shapes\MessageTag> $EmailTags
 * @property list<Shapes\EmailInsights> $Insights
 */
class GetMessageInsightsResponse extends Response
{
}
