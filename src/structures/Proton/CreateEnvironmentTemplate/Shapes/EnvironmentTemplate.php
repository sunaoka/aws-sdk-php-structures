<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $displayName
 * @property string $encryptionKey
 * @property \Aws\Api\DateTimeResult $lastModifiedAt
 * @property string $name
 * @property 'CUSTOMER_MANAGED' $provisioning
 * @property string $recommendedVersion
 */
class EnvironmentTemplate extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     displayName?: string,
     *     encryptionKey?: string,
     *     lastModifiedAt: \Aws\Api\DateTimeResult,
     *     name: string,
     *     provisioning?: 'CUSTOMER_MANAGED',
     *     recommendedVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
