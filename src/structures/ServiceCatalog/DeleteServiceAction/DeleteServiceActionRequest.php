<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $AcceptLanguage
 * @property string|null $IdempotencyToken
 */
class DeleteServiceActionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     AcceptLanguage?: string|null,
     *     IdempotencyToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
