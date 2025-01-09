<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\FormInput> $assetFormsInput
 * @property string $clientToken
 * @property Shapes\DataSourceConfigurationInput $configuration
 * @property string $connectionIdentifier
 * @property string $description
 * @property string $domainIdentifier
 * @property 'ENABLED'|'DISABLED' $enableSetting
 * @property string $environmentIdentifier
 * @property string $name
 * @property string $projectIdentifier
 * @property bool $publishOnImport
 * @property Shapes\RecommendationConfiguration $recommendation
 * @property Shapes\ScheduleConfiguration $schedule
 * @property string $type
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     assetFormsInput?: list<Shapes\FormInput>,
     *     clientToken?: string,
     *     configuration?: Shapes\DataSourceConfigurationInput,
     *     connectionIdentifier?: string,
     *     description?: string,
     *     domainIdentifier: string,
     *     enableSetting?: 'ENABLED'|'DISABLED',
     *     environmentIdentifier?: string,
     *     name: string,
     *     projectIdentifier: string,
     *     publishOnImport?: bool,
     *     recommendation?: Shapes\RecommendationConfiguration,
     *     schedule?: Shapes\ScheduleConfiguration,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
