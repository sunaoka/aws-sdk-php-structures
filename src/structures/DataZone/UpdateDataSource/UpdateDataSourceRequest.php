<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $enableSetting
 * @property bool|null $publishOnImport
 * @property list<Shapes\FormInput>|null $assetFormsInput
 * @property Shapes\ScheduleConfiguration|null $schedule
 * @property Shapes\DataSourceConfigurationInput|null $configuration
 * @property Shapes\RecommendationConfiguration|null $recommendation
 * @property bool|null $retainPermissionsOnRevokeFailure
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     description?: string|null,
     *     enableSetting?: 'ENABLED'|'DISABLED'|null,
     *     publishOnImport?: bool|null,
     *     assetFormsInput?: list<Shapes\FormInput>|null,
     *     schedule?: Shapes\ScheduleConfiguration|null,
     *     configuration?: Shapes\DataSourceConfigurationInput|null,
     *     recommendation?: Shapes\RecommendationConfiguration|null,
     *     retainPermissionsOnRevokeFailure?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
