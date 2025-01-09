<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CancelMetadataTransferJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metadataTransferJobId
 */
class CancelMetadataTransferJobRequest extends Request
{
    /**
     * @param array{metadataTransferJobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
