<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetDetector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CreatedAt
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS' $FindingPublishingFrequency
 * @property string $ServiceRole
 * @property 'ENABLED'|'DISABLED' $Status
 * @property string $UpdatedAt
 * @property Shapes\DataSourceConfigurationsResult $DataSources
 * @property array<string, string> $Tags
 * @property list<Shapes\DetectorFeatureConfigurationResult> $Features
 */
class GetDetectorResponse extends Response
{
}
