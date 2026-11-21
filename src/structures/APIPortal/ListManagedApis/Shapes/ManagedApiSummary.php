<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListManagedApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $managedApiId
 * @property string $managedApiArn
 * @property ApiSignature $apiSignature
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ManagedApiSummary extends Shape
{
    /**
     * @param array{
     *     managedApiId: string,
     *     managedApiArn: string,
     *     apiSignature: ApiSignature,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
