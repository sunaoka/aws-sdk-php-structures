<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\SearchGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DistinguishedName
 * @property 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal' $GroupScope
 * @property 'Distribution'|'Security' $GroupType
 * @property array<string, AttributeValue> $OtherAttributes
 * @property string $SAMAccountName
 * @property string $SID
 */
class Group extends Shape
{
    /**
     * @param array{
     *     DistinguishedName?: string,
     *     GroupScope?: 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal',
     *     GroupType?: 'Distribution'|'Security',
     *     OtherAttributes?: array<string, AttributeValue>,
     *     SAMAccountName: string,
     *     SID?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
