<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $DirectoryId
 * @property string $EmailAddress
 * @property string $GivenName
 * @property array<string, Shapes\AttributeValue> $OtherAttributes
 * @property string $SAMAccountName
 * @property string $Surname
 * @property 'ADD'|'REPLACE'|'REMOVE' $UpdateType
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DirectoryId: string,
     *     EmailAddress?: string,
     *     GivenName?: string,
     *     OtherAttributes?: array<string, Shapes\AttributeValue>,
     *     SAMAccountName: string,
     *     Surname?: string,
     *     UpdateType?: 'ADD'|'REPLACE'|'REMOVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
