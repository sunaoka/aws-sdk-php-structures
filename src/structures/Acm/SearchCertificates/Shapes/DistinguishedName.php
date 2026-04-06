<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CommonName
 * @property list<string>|null $DomainComponents
 * @property string|null $Country
 * @property list<CustomAttribute>|null $CustomAttributes
 * @property string|null $DistinguishedNameQualifier
 * @property string|null $GenerationQualifier
 * @property string|null $GivenName
 * @property string|null $Initials
 * @property string|null $Locality
 * @property string|null $Organization
 * @property string|null $OrganizationalUnit
 * @property string|null $Pseudonym
 * @property string|null $SerialNumber
 * @property string|null $State
 * @property string|null $Surname
 * @property string|null $Title
 */
class DistinguishedName extends Shape
{
    /**
     * @param array{
     *     CommonName?: string|null,
     *     DomainComponents?: list<string>|null,
     *     Country?: string|null,
     *     CustomAttributes?: list<CustomAttribute>|null,
     *     DistinguishedNameQualifier?: string|null,
     *     GenerationQualifier?: string|null,
     *     GivenName?: string|null,
     *     Initials?: string|null,
     *     Locality?: string|null,
     *     Organization?: string|null,
     *     OrganizationalUnit?: string|null,
     *     Pseudonym?: string|null,
     *     SerialNumber?: string|null,
     *     State?: string|null,
     *     Surname?: string|null,
     *     Title?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
