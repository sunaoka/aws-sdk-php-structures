<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string|null $description
 * @property Shapes\AvailabilitySlo|null $availabilitySlo
 * @property Shapes\MultiAzTargets|null $multiAz
 * @property Shapes\MultiRegionTargets|null $multiRegion
 * @property Shapes\DataRecoveryTargets|null $dataRecovery
 */
class UpdatePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     description?: string|null,
     *     availabilitySlo?: Shapes\AvailabilitySlo|null,
     *     multiAz?: Shapes\MultiAzTargets|null,
     *     multiRegion?: Shapes\MultiRegionTargets|null,
     *     dataRecovery?: Shapes\DataRecoveryTargets|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
