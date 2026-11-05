<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $ResourceType
 * @property string $Region
 * @property string $ResourceId
 * @property string|null $ResourceProvider
 * @property string|null $ResourceOwnerOrgId
 * @property string|null $ResourceOwnerAccountId
 * @property string|null $ResourceCloudPartition
 * @property string|null $ResourceRegion
 */
class SoftwareResourceResult extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     ResourceType: string,
     *     Region: string,
     *     ResourceId: string,
     *     ResourceProvider?: string|null,
     *     ResourceOwnerOrgId?: string|null,
     *     ResourceOwnerAccountId?: string|null,
     *     ResourceCloudPartition?: string|null,
     *     ResourceRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
