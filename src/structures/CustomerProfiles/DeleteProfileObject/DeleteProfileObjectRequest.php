<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteProfileObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property string $ProfileObjectUniqueKey
 * @property string $ObjectTypeName
 * @property string $DomainName
 */
class DeleteProfileObjectRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     ProfileObjectUniqueKey: string,
     *     ObjectTypeName: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
