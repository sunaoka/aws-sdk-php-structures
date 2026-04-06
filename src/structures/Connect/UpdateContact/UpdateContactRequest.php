<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string|null $Name
 * @property string|null $Description
 * @property array<string, Shapes\Reference>|null $References
 */
class UpdateContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     References?: array<string, Shapes\Reference>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
