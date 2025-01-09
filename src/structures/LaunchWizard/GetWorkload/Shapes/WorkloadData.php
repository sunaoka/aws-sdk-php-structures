<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $displayName
 * @property string $documentationUrl
 * @property string $iconUrl
 * @property 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED' $status
 * @property string $statusMessage
 * @property string $workloadName
 */
class WorkloadData extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     displayName?: string,
     *     documentationUrl?: string,
     *     iconUrl?: string,
     *     status?: 'ACTIVE'|'INACTIVE'|'DISABLED'|'DELETED',
     *     statusMessage?: string,
     *     workloadName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
