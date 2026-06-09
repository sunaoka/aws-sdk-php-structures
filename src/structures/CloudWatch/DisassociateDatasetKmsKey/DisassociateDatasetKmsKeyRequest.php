<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DisassociateDatasetKmsKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetIdentifier
 */
class DisassociateDatasetKmsKeyRequest extends Request
{
    /**
     * @param array{DatasetIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
