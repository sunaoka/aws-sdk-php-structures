<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateEmailAddressAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailAddressId
 * @property string $InstanceId
 * @property Shapes\AliasConfiguration $AliasConfiguration
 * @property string|null $ClientToken
 */
class AssociateEmailAddressAliasRequest extends Request
{
    /**
     * @param array{
     *     EmailAddressId: string,
     *     InstanceId: string,
     *     AliasConfiguration: Shapes\AliasConfiguration,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
