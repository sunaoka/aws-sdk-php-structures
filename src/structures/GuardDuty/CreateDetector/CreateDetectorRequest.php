<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $Enable
 * @property string $ClientToken
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS' $FindingPublishingFrequency
 * @property Shapes\DataSourceConfigurations $DataSources
 * @property array<string, string> $Tags
 * @property list<Shapes\DetectorFeatureConfiguration> $Features
 */
class CreateDetectorRequest extends Request
{
    /**
     * @param array{
     *     Enable: bool,
     *     ClientToken?: string,
     *     FindingPublishingFrequency?: 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS',
     *     DataSources?: Shapes\DataSourceConfigurations,
     *     Tags?: array<string, string>,
     *     Features?: list<Shapes\DetectorFeatureConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
