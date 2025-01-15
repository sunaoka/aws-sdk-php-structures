<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DistinguishedName
 * @property string|null $EmailAddress
 * @property bool|null $Enabled
 * @property string|null $GivenName
 * @property array<string, AttributeValue>|null $OtherAttributes
 * @property string $SAMAccountName
 * @property string|null $SID
 * @property string|null $Surname
 * @property string|null $UserPrincipalName
 */
class User extends Shape
{
    /**
     * @param array{
     *     DistinguishedName?: string|null,
     *     EmailAddress?: string|null,
     *     Enabled?: bool|null,
     *     GivenName?: string|null,
     *     OtherAttributes?: array<string, AttributeValue>|null,
     *     SAMAccountName: string,
     *     SID?: string|null,
     *     Surname?: string|null,
     *     UserPrincipalName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
