<?php

namespace Sunaoka\Aws\Structures\SesV2\GetReputationEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReputationEntityReference
 * @property 'RESOURCE' $ReputationEntityType
 */
class GetReputationEntityRequest extends Request
{
    /**
     * @param array{
     *     ReputationEntityReference: string,
     *     ReputationEntityType: 'RESOURCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
