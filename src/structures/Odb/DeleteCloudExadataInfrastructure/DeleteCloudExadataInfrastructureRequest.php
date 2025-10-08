<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteCloudExadataInfrastructure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 */
class DeleteCloudExadataInfrastructureRequest extends Request
{
    /**
     * @param array{cloudExadataInfrastructureId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
