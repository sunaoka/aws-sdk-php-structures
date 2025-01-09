<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $DirectoryId
 * @property string $EmailAddress
 * @property string $GivenName
 * @property array<string, Shapes\AttributeValue> $OtherAttributes
 * @property string $SAMAccountName
 * @property string $Surname
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DirectoryId: string,
     *     EmailAddress?: string,
     *     GivenName?: string,
     *     OtherAttributes?: array<string, Shapes\AttributeValue>,
     *     SAMAccountName: string,
     *     Surname?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
