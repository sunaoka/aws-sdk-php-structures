<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property 'RUNNING'|'STOPPED'|null $DesiredState
 * @property Shapes\UpdatePipeSourceParameters|null $SourceParameters
 * @property string|null $Enrichment
 * @property Shapes\PipeEnrichmentParameters|null $EnrichmentParameters
 * @property string|null $Target
 * @property Shapes\PipeTargetParameters|null $TargetParameters
 * @property string $RoleArn
 * @property Shapes\PipeLogConfigurationParameters|null $LogConfiguration
 * @property string|null $KmsKeyIdentifier
 */
class UpdatePipeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     DesiredState?: 'RUNNING'|'STOPPED'|null,
     *     SourceParameters?: Shapes\UpdatePipeSourceParameters|null,
     *     Enrichment?: string|null,
     *     EnrichmentParameters?: Shapes\PipeEnrichmentParameters|null,
     *     Target?: string|null,
     *     TargetParameters?: Shapes\PipeTargetParameters|null,
     *     RoleArn: string,
     *     LogConfiguration?: Shapes\PipeLogConfigurationParameters|null,
     *     KmsKeyIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
