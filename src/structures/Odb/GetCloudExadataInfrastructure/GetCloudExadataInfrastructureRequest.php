<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudExadataInfrastructure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 */
class GetCloudExadataInfrastructureRequest extends Request
{
    /**
     * @param array{cloudExadataInfrastructureId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
