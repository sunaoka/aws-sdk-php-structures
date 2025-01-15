<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $Enable
 * @property string|null $ClientToken
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS'|null $FindingPublishingFrequency
 * @property Shapes\DataSourceConfigurations|null $DataSources
 * @property array<string, string>|null $Tags
 * @property list<Shapes\DetectorFeatureConfiguration>|null $Features
 */
class CreateDetectorRequest extends Request
{
    /**
     * @param array{
     *     Enable: bool,
     *     ClientToken?: string|null,
     *     FindingPublishingFrequency?: 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS'|null,
     *     DataSources?: Shapes\DataSourceConfigurations|null,
     *     Tags?: array<string, string>|null,
     *     Features?: list<Shapes\DetectorFeatureConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
