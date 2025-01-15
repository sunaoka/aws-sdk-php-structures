<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property bool|null $Enable
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS'|null $FindingPublishingFrequency
 * @property Shapes\DataSourceConfigurations|null $DataSources
 * @property list<Shapes\DetectorFeatureConfiguration>|null $Features
 */
class UpdateDetectorRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     Enable?: bool|null,
     *     FindingPublishingFrequency?: 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS'|null,
     *     DataSources?: Shapes\DataSourceConfigurations|null,
     *     Features?: list<Shapes\DetectorFeatureConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
