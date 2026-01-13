<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $projectIdentifier
 * @property string|null $environmentIdentifier
 * @property string|null $connectionIdentifier
 * @property string $type
 * @property Shapes\DataSourceConfigurationInput|null $configuration
 * @property Shapes\RecommendationConfiguration|null $recommendation
 * @property 'ENABLED'|'DISABLED'|null $enableSetting
 * @property Shapes\ScheduleConfiguration|null $schedule
 * @property bool|null $publishOnImport
 * @property list<Shapes\FormInput>|null $assetFormsInput
 * @property string|null $clientToken
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     projectIdentifier: string,
     *     environmentIdentifier?: string|null,
     *     connectionIdentifier?: string|null,
     *     type: string,
     *     configuration?: Shapes\DataSourceConfigurationInput|null,
     *     recommendation?: Shapes\RecommendationConfiguration|null,
     *     enableSetting?: 'ENABLED'|'DISABLED'|null,
     *     schedule?: Shapes\ScheduleConfiguration|null,
     *     publishOnImport?: bool|null,
     *     assetFormsInput?: list<Shapes\FormInput>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
