<?php

namespace Sunaoka\Aws\Structures\DataZone\GetFormType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $formTypeIdentifier
 * @property string|null $revision
 */
class GetFormTypeRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     formTypeIdentifier: string,
     *     revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
