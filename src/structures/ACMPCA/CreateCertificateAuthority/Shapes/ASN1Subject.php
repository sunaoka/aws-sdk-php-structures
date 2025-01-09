<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreateCertificateAuthority\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Country
 * @property string $Organization
 * @property string $OrganizationalUnit
 * @property string $DistinguishedNameQualifier
 * @property string $State
 * @property string $CommonName
 * @property string $SerialNumber
 * @property string $Locality
 * @property string $Title
 * @property string $Surname
 * @property string $GivenName
 * @property string $Initials
 * @property string $Pseudonym
 * @property string $GenerationQualifier
 * @property list<CustomAttribute> $CustomAttributes
 */
class ASN1Subject extends Shape
{
    /**
     * @param array{
     *     Country?: string,
     *     Organization?: string,
     *     OrganizationalUnit?: string,
     *     DistinguishedNameQualifier?: string,
     *     State?: string,
     *     CommonName?: string,
     *     SerialNumber?: string,
     *     Locality?: string,
     *     Title?: string,
     *     Surname?: string,
     *     GivenName?: string,
     *     Initials?: string,
     *     Pseudonym?: string,
     *     GenerationQualifier?: string,
     *     CustomAttributes?: list<CustomAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
