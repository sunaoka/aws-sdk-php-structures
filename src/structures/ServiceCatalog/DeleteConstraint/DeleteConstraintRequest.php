<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteConstraint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $Id
 */
class DeleteConstraintRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
