<?php

namespace Sunaoka\Aws\Structures\SsmSap\UpdateApplicationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property list<Shapes\ApplicationCredential> $CredentialsToAddOrUpdate
 * @property list<Shapes\ApplicationCredential> $CredentialsToRemove
 * @property Shapes\BackintConfig $Backint
 * @property string $DatabaseArn
 */
class UpdateApplicationSettingsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CredentialsToAddOrUpdate?: list<Shapes\ApplicationCredential>,
     *     CredentialsToRemove?: list<Shapes\ApplicationCredential>,
     *     Backint?: Shapes\BackintConfig,
     *     DatabaseArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
