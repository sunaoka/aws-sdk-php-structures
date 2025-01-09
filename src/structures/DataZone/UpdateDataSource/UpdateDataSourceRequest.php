<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FormInput> $assetFormsInput
 * @property Shapes\DataSourceConfigurationInput $configuration
 * @property string $description
 * @property string $domainIdentifier
 * @property 'ENABLED'|'DISABLED' $enableSetting
 * @property string $identifier
 * @property string $name
 * @property bool $publishOnImport
 * @property Shapes\RecommendationConfiguration $recommendation
 * @property bool $retainPermissionsOnRevokeFailure
 * @property Shapes\ScheduleConfiguration $schedule
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     assetFormsInput?: list<Shapes\FormInput>,
     *     configuration?: Shapes\DataSourceConfigurationInput,
     *     description?: string,
     *     domainIdentifier: string,
     *     enableSetting?: 'ENABLED'|'DISABLED',
     *     identifier: string,
     *     name?: string,
     *     publishOnImport?: bool,
     *     recommendation?: Shapes\RecommendationConfiguration,
     *     retainPermissionsOnRevokeFailure?: bool,
     *     schedule?: Shapes\ScheduleConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
