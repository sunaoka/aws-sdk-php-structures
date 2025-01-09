<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\DescribeUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DirectoryId
 * @property string $DistinguishedName
 * @property string $EmailAddress
 * @property bool $Enabled
 * @property string $GivenName
 * @property array<string, Shapes\AttributeValue> $OtherAttributes
 * @property string $Realm
 * @property string $SAMAccountName
 * @property string $SID
 * @property string $Surname
 * @property string $UserPrincipalName
 */
class DescribeUserResponse extends Response
{
}
