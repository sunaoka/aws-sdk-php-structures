<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DistinguishedName|null $DirectoryName
 * @property string|null $DnsName
 * @property string|null $IpAddress
 * @property OtherName|null $OtherName
 * @property string|null $RegisteredId
 * @property string|null $Rfc822Name
 * @property string|null $UniformResourceIdentifier
 */
class GeneralName extends Shape
{
    /**
     * @param array{
     *     DirectoryName?: DistinguishedName|null,
     *     DnsName?: string|null,
     *     IpAddress?: string|null,
     *     OtherName?: OtherName|null,
     *     RegisteredId?: string|null,
     *     Rfc822Name?: string|null,
     *     UniformResourceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
