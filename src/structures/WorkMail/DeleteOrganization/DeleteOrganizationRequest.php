<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $OrganizationId
 * @property bool $DeleteDirectory
 * @property bool|null $ForceDelete
 */
class DeleteOrganizationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     OrganizationId: string,
     *     DeleteDirectory: bool,
     *     ForceDelete?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
