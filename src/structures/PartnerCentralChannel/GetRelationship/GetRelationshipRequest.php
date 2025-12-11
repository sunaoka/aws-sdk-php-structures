<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\GetRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $programManagementAccountIdentifier
 * @property string $identifier
 */
class GetRelationshipRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     programManagementAccountIdentifier: string,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
