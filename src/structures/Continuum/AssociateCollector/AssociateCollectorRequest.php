<?php

namespace Sunaoka\Aws\Structures\Continuum\AssociateCollector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string|null $clientToken
 * @property string $collectorArn
 * @property string $collectorDataAccessRoleArn
 */
class AssociateCollectorRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clientToken?: string|null,
     *     collectorArn: string,
     *     collectorDataAccessRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
