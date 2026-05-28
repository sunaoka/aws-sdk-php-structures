<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\AvailabilitySlo|null $availabilitySlo
 * @property Shapes\MultiAzTargets|null $multiAz
 * @property Shapes\MultiRegionTargets|null $multiRegion
 * @property Shapes\DataRecoveryTargets|null $dataRecovery
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreatePolicyRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     availabilitySlo?: Shapes\AvailabilitySlo|null,
     *     multiAz?: Shapes\MultiAzTargets|null,
     *     multiRegion?: Shapes\MultiRegionTargets|null,
     *     dataRecovery?: Shapes\DataRecoveryTargets|null,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
