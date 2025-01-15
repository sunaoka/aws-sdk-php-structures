<?php

namespace Sunaoka\Aws\Structures\RAM\AssociateResourceShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property list<string>|null $resourceArns
 * @property list<string>|null $principals
 * @property string|null $clientToken
 * @property list<string>|null $sources
 */
class AssociateResourceShareRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     resourceArns?: list<string>|null,
     *     principals?: list<string>|null,
     *     clientToken?: string|null,
     *     sources?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
