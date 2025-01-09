<?php

namespace Sunaoka\Aws\Structures\RAM\DisassociateResourceShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property list<string> $resourceArns
 * @property list<string> $principals
 * @property string $clientToken
 * @property list<string> $sources
 */
class DisassociateResourceShareRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     resourceArns?: list<string>,
     *     principals?: list<string>,
     *     clientToken?: string,
     *     sources?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
