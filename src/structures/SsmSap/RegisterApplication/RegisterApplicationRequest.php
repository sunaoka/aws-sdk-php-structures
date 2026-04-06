<?php

namespace Sunaoka\Aws\Structures\SsmSap\RegisterApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property 'HANA' $ApplicationType
 * @property list<string> $Instances
 * @property string|null $SapInstanceNumber
 * @property string|null $Sid
 * @property array<string, string>|null $Tags
 * @property list<Shapes\ApplicationCredential> $Credentials
 */
class RegisterApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     ApplicationType: 'HANA',
     *     Instances: list<string>,
     *     SapInstanceNumber?: string|null,
     *     Sid?: string|null,
     *     Tags?: array<string, string>|null,
     *     Credentials: list<Shapes\ApplicationCredential>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
