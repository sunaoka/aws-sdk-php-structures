<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\DescribeUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DirectoryId
 * @property string|null $DistinguishedName
 * @property string|null $EmailAddress
 * @property bool|null $Enabled
 * @property string|null $GivenName
 * @property array<string, Shapes\AttributeValue>|null $OtherAttributes
 * @property string|null $Realm
 * @property string|null $SAMAccountName
 * @property string|null $SID
 * @property string|null $Surname
 * @property string|null $UserPrincipalName
 */
class DescribeUserResponse extends Response
{
}
