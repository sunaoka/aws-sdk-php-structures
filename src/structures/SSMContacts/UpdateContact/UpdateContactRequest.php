<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $DisplayName
 * @property Shapes\Plan $Plan
 */
class UpdateContactRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     DisplayName?: string,
     *     Plan?: Shapes\Plan
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
