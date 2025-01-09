<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property InstantiateMetadata $instantiateMetadata
 * @property \Aws\Api\DateTimeResult $lastModified
 * @property ModifyVnfInfoMetadata $modifyVnfInfoMetadata
 * @property UpdateNsMetadata $updateNsMetadata
 */
class GetSolNetworkOperationMetadata extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     instantiateMetadata?: InstantiateMetadata,
     *     lastModified: \Aws\Api\DateTimeResult,
     *     modifyVnfInfoMetadata?: ModifyVnfInfoMetadata,
     *     updateNsMetadata?: UpdateNsMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
