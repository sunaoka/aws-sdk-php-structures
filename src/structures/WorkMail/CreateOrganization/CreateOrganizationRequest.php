<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DirectoryId
 * @property string $Alias
 * @property string|null $ClientToken
 * @property list<Shapes\Domain>|null $Domains
 * @property string|null $KmsKeyArn
 * @property bool|null $EnableInteroperability
 */
class CreateOrganizationRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     Alias: string,
     *     ClientToken?: string|null,
     *     Domains?: list<Shapes\Domain>|null,
     *     KmsKeyArn?: string|null,
     *     EnableInteroperability?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
