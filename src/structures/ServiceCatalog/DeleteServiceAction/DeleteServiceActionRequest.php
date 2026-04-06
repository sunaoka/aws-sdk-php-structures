<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $AcceptLanguage
 */
class DeleteServiceActionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     AcceptLanguage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
