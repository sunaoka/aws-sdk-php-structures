<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $Alias
 * @property string $ClientToken
 * @property list<Shapes\Domain> $Domains
 * @property string $KmsKeyArn
 * @property bool $EnableInteroperability
 */
class CreateOrganizationRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     Alias: string,
     *     ClientToken?: string,
     *     Domains?: list<Shapes\Domain>,
     *     KmsKeyArn?: string,
     *     EnableInteroperability?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
