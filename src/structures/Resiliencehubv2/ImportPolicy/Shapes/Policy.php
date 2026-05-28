<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ImportPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyArn
 * @property string $name
 * @property string|null $description
 * @property AvailabilitySlo|null $availabilitySlo
 * @property MultiAzTargets|null $multiAz
 * @property MultiRegionTargets|null $multiRegion
 * @property DataRecoveryTargets|null $dataRecovery
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property int|null $associatedServiceCount
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     policyArn: string,
     *     name: string,
     *     description?: string|null,
     *     availabilitySlo?: AvailabilitySlo|null,
     *     multiAz?: MultiAzTargets|null,
     *     multiRegion?: MultiRegionTargets|null,
     *     dataRecovery?: DataRecoveryTargets|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     associatedServiceCount?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
