<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Title
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CreatedBy
 * @property int|null $MemberCount
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property string|null $ModifiedBy
 * @property list<Shapes\EngagementContextDetails>|null $Contexts
 */
class GetEngagementResponse extends Response
{
}
