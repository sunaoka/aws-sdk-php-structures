<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $OrganizationId
 * @property bool $DeleteDirectory
 * @property bool $ForceDelete
 * @property bool $DeleteIdentityCenterApplication
 */
class DeleteOrganizationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     OrganizationId: string,
     *     DeleteDirectory: bool,
     *     ForceDelete?: bool,
     *     DeleteIdentityCenterApplication?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
