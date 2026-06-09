<?php

namespace Sunaoka\Aws\Structures\CloudWatch\AssociateDatasetKmsKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetIdentifier
 * @property string $KmsKeyArn
 */
class AssociateDatasetKmsKeyRequest extends Request
{
    /**
     * @param array{
     *     DatasetIdentifier: string,
     *     KmsKeyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
