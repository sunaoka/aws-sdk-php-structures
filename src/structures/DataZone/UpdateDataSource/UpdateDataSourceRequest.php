<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FormInput>|null $assetFormsInput
 * @property Shapes\DataSourceConfigurationInput|null $configuration
 * @property string|null $description
 * @property string $domainIdentifier
 * @property 'ENABLED'|'DISABLED'|null $enableSetting
 * @property string $identifier
 * @property string|null $name
 * @property bool|null $publishOnImport
 * @property Shapes\RecommendationConfiguration|null $recommendation
 * @property bool|null $retainPermissionsOnRevokeFailure
 * @property Shapes\ScheduleConfiguration|null $schedule
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     assetFormsInput?: list<Shapes\FormInput>|null,
     *     configuration?: Shapes\DataSourceConfigurationInput|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     enableSetting?: 'ENABLED'|'DISABLED'|null,
     *     identifier: string,
     *     name?: string|null,
     *     publishOnImport?: bool|null,
     *     recommendation?: Shapes\RecommendationConfiguration|null,
     *     retainPermissionsOnRevokeFailure?: bool|null,
     *     schedule?: Shapes\ScheduleConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
