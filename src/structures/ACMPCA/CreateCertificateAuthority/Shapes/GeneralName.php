<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OtherName $OtherName
 * @property string $Rfc822Name
 * @property string $DnsName
 * @property ASN1Subject $DirectoryName
 * @property EdiPartyName $EdiPartyName
 * @property string $UniformResourceIdentifier
 * @property string $IpAddress
 * @property string $RegisteredId
 */
class GeneralName extends Shape
{
    /**
     * @param array{
     *     OtherName?: OtherName,
     *     Rfc822Name?: string,
     *     DnsName?: string,
     *     DirectoryName?: ASN1Subject,
     *     EdiPartyName?: EdiPartyName,
     *     UniformResourceIdentifier?: string,
     *     IpAddress?: string,
     *     RegisteredId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
