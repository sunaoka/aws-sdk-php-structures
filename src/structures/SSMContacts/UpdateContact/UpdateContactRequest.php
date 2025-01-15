<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string|null $DisplayName
 * @property Shapes\Plan|null $Plan
 */
class UpdateContactRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     DisplayName?: string|null,
     *     Plan?: Shapes\Plan|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
