<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteProfileKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property string $KeyName
 * @property list<string> $Values
 * @property string $DomainName
 */
class DeleteProfileKeyRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     KeyName: string,
     *     Values: list<string>,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
