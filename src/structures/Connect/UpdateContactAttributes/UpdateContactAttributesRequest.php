<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InitialContactId
 * @property string $InstanceId
 * @property array<string, string> $Attributes
 */
class UpdateContactAttributesRequest extends Request
{
    /**
     * @param array{
     *     InitialContactId: string,
     *     InstanceId: string,
     *     Attributes: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
