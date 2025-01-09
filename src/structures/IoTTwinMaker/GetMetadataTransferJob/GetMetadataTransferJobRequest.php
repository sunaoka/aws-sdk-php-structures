<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metadataTransferJobId
 */
class GetMetadataTransferJobRequest extends Request
{
    /**
     * @param array{metadataTransferJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
