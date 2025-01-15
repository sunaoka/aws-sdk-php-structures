<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ApplicationComponentDetail|null $applicationComponentDetail
 * @property list<Shapes\AssociatedApplication>|null $associatedApplications
 * @property list<string>|null $associatedServerIds
 * @property bool|null $moreApplicationResource
 */
class GetApplicationComponentDetailsResponse extends Response
{
}
