<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $KmsKey
 * @property string $SourceURI
 * @property Shapes\ScheduleConfiguration $ScheduleConfig
 * @property array<string, string> $Tags
 * @property string $ClientToken
 * @property Shapes\FileConfiguration $FileConfiguration
 * @property array<string, array<string, list<string>>> $ObjectConfiguration
 */
class CreateDataIntegrationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     KmsKey: string,
     *     SourceURI?: string,
     *     ScheduleConfig?: Shapes\ScheduleConfiguration,
     *     Tags?: array<string, string>,
     *     ClientToken?: string,
     *     FileConfiguration?: Shapes\FileConfiguration,
     *     ObjectConfiguration?: array<string, array<string, list<string>>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
