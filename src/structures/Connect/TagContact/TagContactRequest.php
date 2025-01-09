<?php

namespace Sunaoka\Aws\Structures\Connect\TagContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $InstanceId
 * @property array<string, string> $Tags
 */
class TagContactRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     InstanceId: string,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
