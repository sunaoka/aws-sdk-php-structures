<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $KmsKey
 * @property string|null $SourceURI
 * @property Shapes\ScheduleConfiguration|null $ScheduleConfig
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 * @property Shapes\FileConfiguration|null $FileConfiguration
 * @property array<string, array<string, list<string>>>|null $ObjectConfiguration
 */
class CreateDataIntegrationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     KmsKey: string,
     *     SourceURI?: string|null,
     *     ScheduleConfig?: Shapes\ScheduleConfiguration|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null,
     *     FileConfiguration?: Shapes\FileConfiguration|null,
     *     ObjectConfiguration?: array<string, array<string, list<string>>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
