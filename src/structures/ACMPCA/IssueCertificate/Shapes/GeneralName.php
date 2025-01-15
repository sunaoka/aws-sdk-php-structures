<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OtherName|null $OtherName
 * @property string|null $Rfc822Name
 * @property string|null $DnsName
 * @property ASN1Subject|null $DirectoryName
 * @property EdiPartyName|null $EdiPartyName
 * @property string|null $UniformResourceIdentifier
 * @property string|null $IpAddress
 * @property string|null $RegisteredId
 */
class GeneralName extends Shape
{
    /**
     * @param array{
     *     OtherName?: OtherName|null,
     *     Rfc822Name?: string|null,
     *     DnsName?: string|null,
     *     DirectoryName?: ASN1Subject|null,
     *     EdiPartyName?: EdiPartyName|null,
     *     UniformResourceIdentifier?: string|null,
     *     IpAddress?: string|null,
     *     RegisteredId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
