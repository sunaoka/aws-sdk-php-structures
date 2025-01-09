<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateBillOfMaterialsImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $s3uri
 * @property string $clientToken
 */
class CreateBillOfMaterialsImportJobRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     s3uri: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
