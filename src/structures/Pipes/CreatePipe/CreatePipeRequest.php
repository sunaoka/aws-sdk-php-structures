<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property 'RUNNING'|'STOPPED' $DesiredState
 * @property string $Source
 * @property Shapes\PipeSourceParameters $SourceParameters
 * @property string $Enrichment
 * @property Shapes\PipeEnrichmentParameters $EnrichmentParameters
 * @property string $Target
 * @property Shapes\PipeTargetParameters $TargetParameters
 * @property string $RoleArn
 * @property array<string, string> $Tags
 * @property Shapes\PipeLogConfigurationParameters $LogConfiguration
 * @property string $KmsKeyIdentifier
 */
class CreatePipeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     DesiredState?: 'RUNNING'|'STOPPED',
     *     Source: string,
     *     SourceParameters?: Shapes\PipeSourceParameters,
     *     Enrichment?: string,
     *     EnrichmentParameters?: Shapes\PipeEnrichmentParameters,
     *     Target: string,
     *     TargetParameters?: Shapes\PipeTargetParameters,
     *     RoleArn: string,
     *     Tags?: array<string, string>,
     *     LogConfiguration?: Shapes\PipeLogConfigurationParameters,
     *     KmsKeyIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
