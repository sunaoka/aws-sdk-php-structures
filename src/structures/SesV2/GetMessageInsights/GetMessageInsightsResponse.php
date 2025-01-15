<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $MessageId
 * @property string|null $FromEmailAddress
 * @property string|null $Subject
 * @property list<Shapes\MessageTag>|null $EmailTags
 * @property list<Shapes\EmailInsights>|null $Insights
 */
class GetMessageInsightsResponse extends Response
{
}
