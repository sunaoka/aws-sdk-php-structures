<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\DeleteRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property string $identifier
 * @property string $programManagementAccountIdentifier
 * @property string|null $clientToken
 */
class DeleteRelationshipRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     identifier: string,
     *     programManagementAccountIdentifier: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
