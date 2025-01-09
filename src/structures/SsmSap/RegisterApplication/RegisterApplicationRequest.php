<?php

namespace Sunaoka\Aws\Structures\SsmSap\RegisterApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property 'HANA'|'SAP_ABAP' $ApplicationType
 * @property list<string> $Instances
 * @property string $SapInstanceNumber
 * @property string $Sid
 * @property array<string, string> $Tags
 * @property list<Shapes\ApplicationCredential> $Credentials
 * @property string $DatabaseArn
 * @property list<Shapes\ComponentInfo> $ComponentsInfo
 */
class RegisterApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ApplicationType: 'HANA'|'SAP_ABAP',
     *     Instances: list<string>,
     *     SapInstanceNumber?: string,
     *     Sid?: string,
     *     Tags?: array<string, string>,
     *     Credentials?: list<Shapes\ApplicationCredential>,
     *     DatabaseArn?: string,
     *     ComponentsInfo?: list<Shapes\ComponentInfo>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
