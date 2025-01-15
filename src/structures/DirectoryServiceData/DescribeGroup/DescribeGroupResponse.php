<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\DescribeGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DirectoryId
 * @property string|null $DistinguishedName
 * @property 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal'|null $GroupScope
 * @property 'Distribution'|'Security'|null $GroupType
 * @property array<string, Shapes\AttributeValue>|null $OtherAttributes
 * @property string|null $Realm
 * @property string|null $SAMAccountName
 * @property string|null $SID
 */
class DescribeGroupResponse extends Response
{
}
