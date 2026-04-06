<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property 'RUNNING'|'STOPPED'|null $DesiredState
 * @property string|null $Enrichment
 * @property Shapes\PipeEnrichmentParameters|null $EnrichmentParameters
 * @property string $Name
 * @property string $RoleArn
 * @property Shapes\UpdatePipeSourceParameters|null $SourceParameters
 * @property string|null $Target
 * @property Shapes\PipeTargetParameters|null $TargetParameters
 */
class UpdatePipeRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DesiredState?: 'RUNNING'|'STOPPED'|null,
     *     Enrichment?: string|null,
     *     EnrichmentParameters?: Shapes\PipeEnrichmentParameters|null,
     *     Name: string,
     *     RoleArn: string,
     *     SourceParameters?: Shapes\UpdatePipeSourceParameters|null,
     *     Target?: string|null,
     *     TargetParameters?: Shapes\PipeTargetParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
