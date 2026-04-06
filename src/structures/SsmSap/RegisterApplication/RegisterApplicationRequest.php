<?php

namespace Sunaoka\Aws\Structures\SsmSap\RegisterApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property 'HANA'|'SAP_ABAP' $ApplicationType
 * @property list<string> $Instances
 * @property string|null $SapInstanceNumber
 * @property string|null $Sid
 * @property array<string, string>|null $Tags
 * @property list<Shapes\ApplicationCredential>|null $Credentials
 * @property string|null $DatabaseArn
 */
class RegisterApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ApplicationType: 'HANA'|'SAP_ABAP',
     *     Instances: list<string>,
     *     SapInstanceNumber?: string|null,
     *     Sid?: string|null,
     *     Tags?: array<string, string>|null,
     *     Credentials?: list<Shapes\ApplicationCredential>|null,
     *     DatabaseArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
