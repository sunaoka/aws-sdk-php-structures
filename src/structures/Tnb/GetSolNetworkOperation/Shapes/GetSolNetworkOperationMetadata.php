<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property InstantiateMetadata|null $instantiateMetadata
 * @property \Aws\Api\DateTimeResult $lastModified
 * @property ModifyVnfInfoMetadata|null $modifyVnfInfoMetadata
 * @property UpdateNsMetadata|null $updateNsMetadata
 */
class GetSolNetworkOperationMetadata extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     instantiateMetadata?: InstantiateMetadata|null,
     *     lastModified: \Aws\Api\DateTimeResult,
     *     modifyVnfInfoMetadata?: ModifyVnfInfoMetadata|null,
     *     updateNsMetadata?: UpdateNsMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
