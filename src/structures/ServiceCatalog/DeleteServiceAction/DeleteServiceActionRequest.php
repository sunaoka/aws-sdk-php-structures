<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $AcceptLanguage
 * @property string $IdempotencyToken
 */
class DeleteServiceActionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     AcceptLanguage?: string,
     *     IdempotencyToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
