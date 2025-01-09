<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DistinguishedName
 * @property string $EmailAddress
 * @property bool $Enabled
 * @property string $GivenName
 * @property array<string, AttributeValue> $OtherAttributes
 * @property string $SAMAccountName
 * @property string $SID
 * @property string $Surname
 * @property string $UserPrincipalName
 */
class User extends Shape
{
    /**
     * @param array{
     *     DistinguishedName?: string,
     *     EmailAddress?: string,
     *     Enabled?: bool,
     *     GivenName?: string,
     *     OtherAttributes?: array<string, AttributeValue>,
     *     SAMAccountName: string,
     *     SID?: string,
     *     Surname?: string,
     *     UserPrincipalName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
