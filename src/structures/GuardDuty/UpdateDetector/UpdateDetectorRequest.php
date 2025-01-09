<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property bool $Enable
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS' $FindingPublishingFrequency
 * @property Shapes\DataSourceConfigurations $DataSources
 * @property list<Shapes\DetectorFeatureConfiguration> $Features
 */
class UpdateDetectorRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     Enable?: bool,
     *     FindingPublishingFrequency?: 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS',
     *     DataSources?: Shapes\DataSourceConfigurations,
     *     Features?: list<Shapes\DetectorFeatureConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
