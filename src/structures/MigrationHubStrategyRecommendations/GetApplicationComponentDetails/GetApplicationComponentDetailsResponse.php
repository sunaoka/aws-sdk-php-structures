<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ApplicationComponentDetail $applicationComponentDetail
 * @property list<Shapes\AssociatedApplication> $associatedApplications
 * @property list<string> $associatedServerIds
 * @property bool $moreApplicationResource
 */
class GetApplicationComponentDetailsResponse extends Response
{
}
