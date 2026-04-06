<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeSecurityPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Fips
 * @property string $SecurityPolicyName
 * @property list<string>|null $SshCiphers
 * @property list<string>|null $SshKexs
 * @property list<string>|null $SshMacs
 * @property list<string>|null $TlsCiphers
 * @property list<string>|null $SshHostKeyAlgorithms
 * @property 'SERVER'|'CONNECTOR'|null $Type
 * @property list<'SFTP'|'FTPS'>|null $Protocols
 */
class DescribedSecurityPolicy extends Shape
{
    /**
     * @param array{
     *     Fips?: bool|null,
     *     SecurityPolicyName: string,
     *     SshCiphers?: list<string>|null,
     *     SshKexs?: list<string>|null,
     *     SshMacs?: list<string>|null,
     *     TlsCiphers?: list<string>|null,
     *     SshHostKeyAlgorithms?: list<string>|null,
     *     Type?: 'SERVER'|'CONNECTOR'|null,
     *     Protocols?: list<'SFTP'|'FTPS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
