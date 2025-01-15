<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property list<Shapes\EngagementContextDetails>|null $Contexts
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CreatedBy
 * @property string|null $Description
 * @property string|null $Id
 * @property int|null $MemberCount
 * @property string|null $Title
 */
class GetEngagementResponse extends Response
{
}
