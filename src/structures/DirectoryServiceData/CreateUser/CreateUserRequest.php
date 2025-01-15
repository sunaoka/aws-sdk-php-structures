<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $DirectoryId
 * @property string|null $EmailAddress
 * @property string|null $GivenName
 * @property array<string, Shapes\AttributeValue>|null $OtherAttributes
 * @property string $SAMAccountName
 * @property string|null $Surname
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DirectoryId: string,
     *     EmailAddress?: string|null,
     *     GivenName?: string|null,
     *     OtherAttributes?: array<string, Shapes\AttributeValue>|null,
     *     SAMAccountName: string,
     *     Surname?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
