<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $DirectoryId
 * @property string|null $EmailAddress
 * @property string|null $GivenName
 * @property array<string, Shapes\AttributeValue>|null $OtherAttributes
 * @property string $SAMAccountName
 * @property string|null $Surname
 * @property 'ADD'|'REPLACE'|'REMOVE'|null $UpdateType
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DirectoryId: string,
     *     EmailAddress?: string|null,
     *     GivenName?: string|null,
     *     OtherAttributes?: array<string, Shapes\AttributeValue>|null,
     *     SAMAccountName: string,
     *     Surname?: string|null,
     *     UpdateType?: 'ADD'|'REPLACE'|'REMOVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
