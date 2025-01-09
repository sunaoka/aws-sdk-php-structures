<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\DescribeGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DirectoryId
 * @property string $DistinguishedName
 * @property 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal' $GroupScope
 * @property 'Distribution'|'Security' $GroupType
 * @property array<string, Shapes\AttributeValue> $OtherAttributes
 * @property string $Realm
 * @property string $SAMAccountName
 * @property string $SID
 */
class DescribeGroupResponse extends Response
{
}
