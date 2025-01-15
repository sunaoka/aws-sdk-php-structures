<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetDetector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CreatedAt
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS'|null $FindingPublishingFrequency
 * @property string $ServiceRole
 * @property 'ENABLED'|'DISABLED' $Status
 * @property string|null $UpdatedAt
 * @property Shapes\DataSourceConfigurationsResult|null $DataSources
 * @property array<string, string>|null $Tags
 * @property list<Shapes\DetectorFeatureConfigurationResult>|null $Features
 */
class GetDetectorResponse extends Response
{
}
