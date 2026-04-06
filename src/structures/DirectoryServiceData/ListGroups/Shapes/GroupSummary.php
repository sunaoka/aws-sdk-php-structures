<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal' $GroupScope
 * @property 'Distribution'|'Security' $GroupType
 * @property string $SAMAccountName
 * @property string $SID
 */
class GroupSummary extends Shape
{
    /**
     * @param array{
     *     GroupScope: 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal',
     *     GroupType: 'Distribution'|'Security',
     *     SAMAccountName: string,
     *     SID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
