<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutRetentionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $Id
 * @property string $Name
 * @property string|null $Description
 * @property list<Shapes\FolderConfiguration> $FolderConfigurations
 */
class PutRetentionPolicyRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Id?: string|null,
     *     Name: string,
     *     Description?: string|null,
     *     FolderConfigurations: list<Shapes\FolderConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
