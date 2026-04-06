<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\SearchGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DistinguishedName
 * @property 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal'|null $GroupScope
 * @property 'Distribution'|'Security'|null $GroupType
 * @property array<string, AttributeValue>|null $OtherAttributes
 * @property string $SAMAccountName
 * @property string|null $SID
 */
class Group extends Shape
{
    /**
     * @param array{
     *     DistinguishedName?: string|null,
     *     GroupScope?: 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal'|null,
     *     GroupType?: 'Distribution'|'Security'|null,
     *     OtherAttributes?: array<string, AttributeValue>|null,
     *     SAMAccountName: string,
     *     SID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
