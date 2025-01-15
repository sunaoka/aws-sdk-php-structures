<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $DirectoryId
 * @property 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal'|null $GroupScope
 * @property 'Distribution'|'Security'|null $GroupType
 * @property array<string, Shapes\AttributeValue>|null $OtherAttributes
 * @property string $SAMAccountName
 * @property 'ADD'|'REPLACE'|'REMOVE'|null $UpdateType
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DirectoryId: string,
     *     GroupScope?: 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal'|null,
     *     GroupType?: 'Distribution'|'Security'|null,
     *     OtherAttributes?: array<string, Shapes\AttributeValue>|null,
     *     SAMAccountName: string,
     *     UpdateType?: 'ADD'|'REPLACE'|'REMOVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
