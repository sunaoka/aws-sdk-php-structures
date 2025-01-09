<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property list<Shapes\EngagementContextDetails> $Contexts
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $CreatedBy
 * @property string $Description
 * @property string $Id
 * @property int $MemberCount
 * @property string $Title
 */
class GetEngagementResponse extends Response
{
}
