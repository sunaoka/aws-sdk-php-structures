<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $DirectoryId
 * @property 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal' $GroupScope
 * @property 'Distribution'|'Security' $GroupType
 * @property array<string, Shapes\AttributeValue> $OtherAttributes
 * @property string $SAMAccountName
 * @property 'ADD'|'REPLACE'|'REMOVE' $UpdateType
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DirectoryId: string,
     *     GroupScope?: 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal',
     *     GroupType?: 'Distribution'|'Security',
     *     OtherAttributes?: array<string, Shapes\AttributeValue>,
     *     SAMAccountName: string,
     *     UpdateType?: 'ADD'|'REPLACE'|'REMOVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
