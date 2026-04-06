<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property 'RUNNING'|'STOPPED'|null $DesiredState
 * @property string|null $Enrichment
 * @property Shapes\PipeEnrichmentParameters|null $EnrichmentParameters
 * @property string $Name
 * @property string $RoleArn
 * @property string $Source
 * @property Shapes\PipeSourceParameters|null $SourceParameters
 * @property array<string, string>|null $Tags
 * @property string $Target
 * @property Shapes\PipeTargetParameters|null $TargetParameters
 */
class CreatePipeRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DesiredState?: 'RUNNING'|'STOPPED'|null,
     *     Enrichment?: string|null,
     *     EnrichmentParameters?: Shapes\PipeEnrichmentParameters|null,
     *     Name: string,
     *     RoleArn: string,
     *     Source: string,
     *     SourceParameters?: Shapes\PipeSourceParameters|null,
     *     Tags?: array<string, string>|null,
     *     Target: string,
     *     TargetParameters?: Shapes\PipeTargetParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
