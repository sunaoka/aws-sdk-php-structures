<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetTemporaryDataLocationCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<900, 43200>|null $DurationSeconds
 * @property Shapes\AuditContext|null $AuditContext
 * @property list<string>|null $DataLocations
 * @property 'READ'|'READWRITE'|null $CredentialsScope
 */
class GetTemporaryDataLocationCredentialsRequest extends Request
{
    /**
     * @param array{
     *     DurationSeconds?: int<900, 43200>|null,
     *     AuditContext?: Shapes\AuditContext|null,
     *     DataLocations?: list<string>|null,
     *     CredentialsScope?: 'READ'|'READWRITE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
