<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeSecurityPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Fips
 * @property string $SecurityPolicyName
 * @property list<string> $SshCiphers
 * @property list<string> $SshKexs
 * @property list<string> $SshMacs
 * @property list<string> $TlsCiphers
 * @property list<string> $SshHostKeyAlgorithms
 * @property 'SERVER'|'CONNECTOR' $Type
 * @property list<'SFTP'|'FTPS'> $Protocols
 */
class DescribedSecurityPolicy extends Shape
{
    /**
     * @param array{
     *     Fips?: bool,
     *     SecurityPolicyName: string,
     *     SshCiphers?: list<string>,
     *     SshKexs?: list<string>,
     *     SshMacs?: list<string>,
     *     TlsCiphers?: list<string>,
     *     SshHostKeyAlgorithms?: list<string>,
     *     Type?: 'SERVER'|'CONNECTOR',
     *     Protocols?: list<'SFTP'|'FTPS'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
