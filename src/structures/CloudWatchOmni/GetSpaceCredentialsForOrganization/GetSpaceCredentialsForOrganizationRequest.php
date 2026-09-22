<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetSpaceCredentialsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SpaceCredentialRequestContext $context
 * @property 'SPACE_OPERATION' $credentialType
 */
class GetSpaceCredentialsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     context: Shapes\SpaceCredentialRequestContext,
     *     credentialType: 'SPACE_OPERATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
