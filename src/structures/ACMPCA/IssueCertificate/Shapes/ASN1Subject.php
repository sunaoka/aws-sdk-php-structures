<?php

namespace Sunaoka\Aws\Structures\ACMPCA\IssueCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Country
 * @property string|null $Organization
 * @property string|null $OrganizationalUnit
 * @property string|null $DistinguishedNameQualifier
 * @property string|null $State
 * @property string|null $CommonName
 * @property string|null $SerialNumber
 * @property string|null $Locality
 * @property string|null $Title
 * @property string|null $Surname
 * @property string|null $GivenName
 * @property string|null $Initials
 * @property string|null $Pseudonym
 * @property string|null $GenerationQualifier
 * @property list<CustomAttribute>|null $CustomAttributes
 */
class ASN1Subject extends Shape
{
    /**
     * @param array{
     *     Country?: string|null,
     *     Organization?: string|null,
     *     OrganizationalUnit?: string|null,
     *     DistinguishedNameQualifier?: string|null,
     *     State?: string|null,
     *     CommonName?: string|null,
     *     SerialNumber?: string|null,
     *     Locality?: string|null,
     *     Title?: string|null,
     *     Surname?: string|null,
     *     GivenName?: string|null,
     *     Initials?: string|null,
     *     Pseudonym?: string|null,
     *     GenerationQualifier?: string|null,
     *     CustomAttributes?: list<CustomAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
