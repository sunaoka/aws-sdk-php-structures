<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'RUNNING'|'STOPPED'|null $DesiredState
 * @property string $Source
 * @property Shapes\PipeSourceParameters|null $SourceParameters
 * @property string|null $Enrichment
 * @property Shapes\PipeEnrichmentParameters|null $EnrichmentParameters
 * @property string $Target
 * @property Shapes\PipeTargetParameters|null $TargetParameters
 * @property string $RoleArn
 * @property array<string, string>|null $Tags
 * @property Shapes\PipeLogConfigurationParameters|null $LogConfiguration
 * @property string|null $KmsKeyIdentifier
 */
class CreatePipeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     DesiredState?: 'RUNNING'|'STOPPED'|null,
     *     Source: string,
     *     SourceParameters?: Shapes\PipeSourceParameters|null,
     *     Enrichment?: string|null,
     *     EnrichmentParameters?: Shapes\PipeEnrichmentParameters|null,
     *     Target: string,
     *     TargetParameters?: Shapes\PipeTargetParameters|null,
     *     RoleArn: string,
     *     Tags?: array<string, string>|null,
     *     LogConfiguration?: Shapes\PipeLogConfigurationParameters|null,
     *     KmsKeyIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
