<?php

namespace Sunaoka\Aws\Structures\SsmSap\UpdateApplicationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property list<Shapes\ApplicationCredential>|null $CredentialsToAddOrUpdate
 * @property list<Shapes\ApplicationCredential>|null $CredentialsToRemove
 * @property Shapes\BackintConfig|null $Backint
 * @property string|null $DatabaseArn
 */
class UpdateApplicationSettingsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CredentialsToAddOrUpdate?: list<Shapes\ApplicationCredential>|null,
     *     CredentialsToRemove?: list<Shapes\ApplicationCredential>|null,
     *     Backint?: Shapes\BackintConfig|null,
     *     DatabaseArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
