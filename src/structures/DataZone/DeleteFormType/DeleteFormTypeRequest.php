<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteFormType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $formTypeIdentifier
 */
class DeleteFormTypeRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     formTypeIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
