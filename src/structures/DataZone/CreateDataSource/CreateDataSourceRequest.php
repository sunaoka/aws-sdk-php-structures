<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FormInput>|null $assetFormsInput
 * @property string|null $clientToken
 * @property Shapes\DataSourceConfigurationInput|null $configuration
 * @property string|null $description
 * @property string $domainIdentifier
 * @property 'ENABLED'|'DISABLED'|null $enableSetting
 * @property string $environmentIdentifier
 * @property string $name
 * @property string $projectIdentifier
 * @property bool|null $publishOnImport
 * @property Shapes\RecommendationConfiguration|null $recommendation
 * @property Shapes\ScheduleConfiguration|null $schedule
 * @property string $type
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     assetFormsInput?: list<Shapes\FormInput>|null,
     *     clientToken?: string|null,
     *     configuration?: Shapes\DataSourceConfigurationInput|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     enableSetting?: 'ENABLED'|'DISABLED'|null,
     *     environmentIdentifier: string,
     *     name: string,
     *     projectIdentifier: string,
     *     publishOnImport?: bool|null,
     *     recommendation?: Shapes\RecommendationConfiguration|null,
     *     schedule?: Shapes\ScheduleConfiguration|null,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
