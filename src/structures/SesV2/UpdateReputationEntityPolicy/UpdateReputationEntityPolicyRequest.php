<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateReputationEntityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE' $ReputationEntityType
 * @property string $ReputationEntityReference
 * @property string $ReputationEntityPolicy
 */
class UpdateReputationEntityPolicyRequest extends Request
{
    /**
     * @param array{
     *     ReputationEntityType: 'RESOURCE',
     *     ReputationEntityReference: string,
     *     ReputationEntityPolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
