<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $DirectoryId
 * @property 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal'|null $GroupScope
 * @property 'Distribution'|'Security'|null $GroupType
 * @property array<string, Shapes\AttributeValue>|null $OtherAttributes
 * @property string $SAMAccountName
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DirectoryId: string,
     *     GroupScope?: 'DomainLocal'|'Global'|'Universal'|'BuiltinLocal'|null,
     *     GroupType?: 'Distribution'|'Security'|null,
     *     OtherAttributes?: array<string, Shapes\AttributeValue>|null,
     *     SAMAccountName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
