<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property 'RUNNING'|'STOPPED' $DesiredState
 * @property Shapes\UpdatePipeSourceParameters $SourceParameters
 * @property string $Enrichment
 * @property Shapes\PipeEnrichmentParameters $EnrichmentParameters
 * @property string $Target
 * @property Shapes\PipeTargetParameters $TargetParameters
 * @property string $RoleArn
 * @property Shapes\PipeLogConfigurationParameters $LogConfiguration
 * @property string $KmsKeyIdentifier
 */
class UpdatePipeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     DesiredState?: 'RUNNING'|'STOPPED',
     *     SourceParameters?: Shapes\UpdatePipeSourceParameters,
     *     Enrichment?: string,
     *     EnrichmentParameters?: Shapes\PipeEnrichmentParameters,
     *     Target?: string,
     *     TargetParameters?: Shapes\PipeTargetParameters,
     *     RoleArn: string,
     *     LogConfiguration?: Shapes\PipeLogConfigurationParameters,
     *     KmsKeyIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
