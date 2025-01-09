<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutRetentionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property list<Shapes\FolderConfiguration> $FolderConfigurations
 */
class PutRetentionPolicyRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Id?: string,
     *     Name: string,
     *     Description?: string,
     *     FolderConfigurations: list<Shapes\FolderConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
